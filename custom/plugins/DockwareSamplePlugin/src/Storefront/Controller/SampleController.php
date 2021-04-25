<?php declare(strict_types=1);

namespace DockwareSamplePlugin\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Storefront\Controller\StorefrontController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"storefront"})
 */
class SampleController extends StorefrontController
{
    /**
     * @Route("/fastorder", name="frontend.fastorder.page", methods={"GET"})
     */
    public function fastorderPage(): Response
    {
        return $this->renderStorefront('@DockwareSamplePlugin/storefront/page/fastorder.html.twig', [
            //variables
        ]);
    }
}