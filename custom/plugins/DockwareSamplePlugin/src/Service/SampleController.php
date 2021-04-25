<?php declare(strict_types=1);

namespace DockwareSamplePlugin\Service;

use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\LineItemFactoryRegistry;
use Shopware\Core\Checkout\Cart\SalesChannel\CartService;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Core\Checkout\Cart\Cart;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @RouteScope(scopes={"storefront"})
 */
class SampleController extends StorefrontController
{

    /**
     * @var LineItemFactoryRegistry
     */
    private $factory;

    /**
     * @var CartService
     */
    private $cartService;

    /**
     * @var EntityRepositoryInterface
     */
    private $productRepository;

    public function __construct(LineItemFactoryRegistry $factory, CartService $cartService, EntityRepositoryInterface $productRepository)
    {
        $this->factory = $factory;
        $this->cartService = $cartService;
        $this->productRepository = $productRepository;
    }

    public function readData(Context $context, $prodNum)
    {
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('productNumber', $prodNum));
        $criteria->addFilter(new EqualsFilter('available', true));
        return $this->productRepository->search($criteria, $context)->first();
    }

    /**
     * @Route("/fastorder/addtocart", name="frontend.fastorder.addtocart", methods={"POST"}, defaults={"XmlHttpRequest"=true})
     */
    public function fastorderAddToCart(Cart $cart, SalesChannelContext $salesContext, Context $context, Request $request): RedirectResponse
    {
        $productDataRequest = $request->request->get('productData');

        foreach ($productDataRequest as $productData){
            if ($product = $this->readData($context, $productData['article'])){

                $lineItem = $this->factory->create([
                    'type' => LineItem::PRODUCT_LINE_ITEM_TYPE,
                    'referencedId' => $product->getId(),
                    'quantity' => (int)$productData['quantity'],
                    'payload' => ['key' => 'value']
                ], $salesContext);
                if ($this->cartService->add($cart, $lineItem, $salesContext)){
                    $this->productRepository->upsert([[
                        'id' => $product->getId(),
                        'fastOrderItems' => [[
                            'quantity' => (int)$productData['quantity']
                        ]]
                    ]], $context);
                }
            }
        }
        return $this->redirectToRoute('frontend.checkout.cart.page');
    }
}