import SettingsPageObject from '../../../support/pages/module/sw-settings.page-object';

const page = new SettingsPageObject();

describe('Number Range: Test acl privileges', () => {
    beforeEach(() => {
        cy.setToInitialState()
            .then(() => {
                return cy.loginViaApi();
            })
            .then(() => {
                return cy.openInitialPage(`${Cypress.env('admin')}#/sw/dashboard/index`);
            });
    });

    it('@settings: read number range with ACL, but without rights', () => {
        cy.loginAsUserWithPermissions([]);

        cy.visit(`${Cypress.env('admin')}#/sw/settings/number/range/index`);
        cy.location('hash').should('eq', '#/sw/privilege/error/index');

        cy.visit(`${Cypress.env('admin')}#/sw/settings/number/range/detail/2096ac17bc724461b87f7850fc149b4b`);
        cy.location('hash').should('eq', '#/sw/privilege/error/index');
    });

    it('@settings: read number range with ACL', () => {
        cy.loginAsUserWithPermissions([
            {
                key: 'number_ranges',
                role: 'viewer'
            }
        ]);

        cy.get('.sw-admin-menu__item--sw-settings').click();
        cy.get('#sw-settings-number-range').click();

        cy.get(`${page.elements.smartBarHeader} > h2`).contains('Number ranges');
        cy.get(page.elements.primaryButton).contains('Add number range');

        cy.get('.sw-number-range-list__add-number-range').should('have.class', 'sw-button--disabled');

        cy.get(`${page.elements.dataGridRow}--0 a`).click();
        cy.get(page.elements.numberRangeSaveAction).should('be.disabled');
        cy.get('input').should('be.disabled');
    });

    it('@settings: create and read number range with ACL', () => {
        cy.loginAsUserWithPermissions([
            {
                key: 'number_ranges',
                role: 'viewer'
            },
            {
                key: 'number_ranges',
                role: 'editor'
            },
            {
                key: 'number_ranges',
                role: 'creator'
            }
        ]);

        cy.server();
        cy.route({
            url: '/api/v*/number-range',
            method: 'post'
        }).as('saveData');
        cy.route({
            url: '/api/v*/search/number-range',
            method: 'post'
        }).as('searchData');
        cy.route({
            url: '/api/v*/search/number-range-type',
            method: 'post'
        }).as('searchNumberRangeType');
        cy.route({
            url: '/api/v*/search/sales-channel',
            method: 'post'
        }).as('searchSalesChannel');

        cy.get('.sw-admin-menu__item--sw-settings').click();
        cy.get('#sw-settings-number-range').click();

        cy.get('a[href="#/sw/settings/number/range/create"]').click();

        cy.get('input[name=sw-field--numberRange-name]').type('Name e2e');
        cy.get('input[name=sw-field--numberRange-description]').type('description e2e');
        cy.wait('@searchNumberRangeType').then(({ response }) => {
            const { attributes } = response.body.data[0];
            cy.get('#numberRangeTypes')
                .typeSingleSelectAndCheck(
                    attributes.typeName,
                    '#numberRangeTypes'
                );
        });
        cy.wait('@searchSalesChannel').then(({ response }) => {
            const { attributes } = response.body.data[0];
            cy.get('.sw-multi-select').typeMultiSelectAndCheck(attributes.name);
        });

        cy.get(page.elements.numberRangeSaveAction).click();

        // Verify creation
        cy.wait('@saveData').then((xhr) => {
            expect(xhr).to.have.property('status', 204);
        });

        cy.get(page.elements.smartBarBack).click();
        cy.get('input.sw-search-bar__input').typeAndCheckSearchField('Name e2e');

        cy.wait('@searchData').then(xhr => {
            expect(xhr).to.have.property('status', 200);
        });

        cy.get('.sw-settings-number-range-list-grid').should('be.visible');
        cy.get(`${page.elements.dataGridRow}--0`).should('be.visible')
            .contains('Name e2e');
    });

    it('@settings: can edit number range with ACL', () => {
        cy.loginAsUserWithPermissions([
            {
                key: 'number_ranges',
                role: 'viewer'
            },
            {
                key: 'number_ranges',
                role: 'editor'
            }
        ]);

        // Request we want to wait for later
        cy.server();
        cy.route({
            url: '/api/v*/number-range/*',
            method: 'patch'
        }).as('saveData');
        cy.route({
            url: '/api/v*/search/number-range',
            method: 'post'
        }).as('searchData');

        cy.get('.sw-admin-menu__item--sw-settings').click();
        cy.get('#sw-settings-number-range').click();

        cy.get(`${page.elements.dataGridRow}--1 a`).click();

        // edit name
        cy.get('input[name=sw-field--numberRange-name]').clear();
        cy.get('input[name=sw-field--numberRange-name]').clearTypeAndCheck('Cancellations update');

        cy.get(page.elements.numberRangeSaveAction).click();

        // Verify creation
        cy.wait('@saveData').then((xhr) => {
            expect(xhr).to.have.property('status', 204);
        });

        cy.get(page.elements.smartBarBack).click();
        cy.get('input.sw-search-bar__input').typeAndCheckSearchField('Cancellations update');

        cy.wait('@searchData').then(xhr => {
            expect(xhr).to.have.property('status', 200);
        });

        cy.get('.sw-settings-number-range-list-grid').should('be.visible');
        cy.get(`${page.elements.dataGridRow}--0`).should('be.visible')
            .contains('Cancellations update');
    });

    it('@settings: can delete number range with ACL', () => {
        cy.loginAsUserWithPermissions([
            {
                key: 'number_ranges',
                role: 'viewer'
            },
            {
                key: 'number_ranges',
                role: 'deleter'
            }
        ]);

        // Request we want to wait for later
        cy.server();
        cy.route({
            url: '/api/v*/number-range/*',
            method: 'delete'
        }).as('deleteData');

        // go to number range module
        cy.get('.sw-admin-menu__item--sw-settings').click();
        cy.get('#sw-settings-number-range').click();

        // Delete number range
        cy.clickContextMenuItem(
            `${page.elements.contextMenu}-item--danger`,
            page.elements.contextMenuButton,
            `${page.elements.dataGridRow}--0`
        );
        cy.get('.sw-modal__body').should('be.visible');
        cy.get(`${page.elements.dataGridRow}--0 ${page.elements.numberRangeColumnName}`).then(row => {
            cy.get('.sw-modal__body')
                .contains(`Are you sure you want to delete the number range "${row.text().trim()}"?`);
        });
        cy.get(`${page.elements.modal}__footer button${page.elements.dangerButton}`).click();

        // Verify deletion
        cy.wait('@deleteData').then((xhr) => {
            expect(xhr).to.have.property('status', 204);
        });

        cy.get(page.elements.modal).should('not.exist');
    });
});