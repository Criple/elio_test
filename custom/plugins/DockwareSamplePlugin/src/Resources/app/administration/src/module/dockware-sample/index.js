
import enGB from './snippet/en-GB';

Shopware.Module.register('dockware-sample', {
    type: 'plugin',
    name: 'FastOrderList',
    title: 'dockware-sample.general.mainMenuItemGeneral',
    description: 'dockware-sample.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',

    snippets: {
        'en-GB': enGB
    },

    routes: {
        list: {
            component: 'dockware-fastorder-list',
            path: 'fastorder_list'
        },
    },

    navigation: [{
        label: 'dockware-sample.general.mainMenuItemGeneral',
        color: '#ff3d58',
        path: 'dockware.sample.list',
        icon: 'default-shopping-paper-bag-product',
        parent: 'sw-order',
        position: 200
    }]
});