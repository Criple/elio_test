
import template from './dockware-fastorder-list.html.twig';

const { Criteria } = Shopware.Data;

Shopware.Component.register('dockware-fastorder-list', {
    inject: [
        'repositoryFactory',
    ],
    template,

    metaInfo() {
        return {
            title: this.$createTitle()
        };
    },
    data: function () {
        return {
            dataSource: undefined,
            columns: [
                { property: 'productId', label: 'Product number' },
                { property: 'quantity', label: 'Quantity' },
                { property: 'createdAt', label: 'Created at' }
            ],
        };
    },

    computed: {
        fastOrderRepository() {
            return this.repositoryFactory.create('dockware_fastorder_products');
        },
    },

    created() {
        const criteria = new Criteria();


        criteria.setTotalCountMode(2);


        this.fastOrderRepository.create('fastOrders');

        this.fastOrderRepository
            .search(criteria, Shopware.Context.api)
            .then(result => {
                var resObj = [];
                result.forEach(function(item) {
                    resObj.push({
                        id: item.id,
                        productId: item.productId,
                        quantity: item.quantity,
                        createdAt: (new Date(item.createdAt)).toLocaleDateString(),
                    });
                })
                this.dataSource = resObj;
                this.result = result;
            });
    },
});