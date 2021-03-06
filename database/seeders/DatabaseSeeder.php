<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;

class DatabaseSeeder extends BaseSeeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->activateAllPlugins();

        $this->call(LanguageSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductCollectionSeeder::class);
        $this->call(ProductLabelSeeder::class);
        $this->call(ProductAttributeSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(ProductTagSeeder::class);
        $this->call(FlashSaleSeeder::class);
        $this->call(ShippingSeeder::class);
        $this->call(OrderEcommerceSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(SimpleSliderSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(StoreLocatorSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(WidgetSeeder::class);
        $this->call(ThemeOptionSeeder::class);




//        $this->call(ActivationsTableSeeder::class);
////        $this->call(AdsTableSeeder::class);
////        $this->call(AdsTranslationsTableSeeder::class);
////        $this->call(AuditHistoriesTableSeeder::class);
//        $this->call(CategoriesTableSeeder::class);
//        $this->call(CategoriesTranslationsTableSeeder::class);
////        $this->call(CitiesTableSeeder::class);
////        $this->call(CitiesBackupTableSeeder::class);//notfound
////        $this->call(CitiesTranslationsTableSeeder::class);
////        $this->call(ContactRepliesTableSeeder::class);
////        $this->call(ContactsTableSeeder::class);
////        $this->call(CountriesTableSeeder::class);
////        $this->call(CountriesBackupTableSeeder::class);
////        $this->call(CountriesTranslationsTableSeeder::class);
////        $this->call(DashboardWidgetSettingsTableSeeder::class);
////        $this->call(DashboardWidgetsTableSeeder::class);
//        $this->call(EcBrandsTableSeeder::class);
//        $this->call(EcBrandsTranslationsTableSeeder::class);
////        $this->call(EcCartTableSeeder::class);
//        $this->call(EcCurrenciesTableSeeder::class);
//        $this->call(EcCustomerAddressesTableSeeder::class);
////        $this->call(EcCustomerPasswordResetsTableSeeder::class);
//        $this->call(EcCustomersTableSeeder::class);
////        $this->call(EcDiscountCustomersTableSeeder::class);
////        $this->call(EcDiscountProductCollectionsTableSeeder::class);
////        $this->call(EcDiscountProductsTableSeeder::class);
////        $this->call(EcDiscountsTableSeeder::class);
//        $this->call(EcFlashSaleProductsTableSeeder::class);
//        $this->call(EcFlashSalesTableSeeder::class);
//        $this->call(EcFlashSalesTranslationsTableSeeder::class);
////        $this->call(EcGroupedProductsTableSeeder::class);
//        $this->call(EcOrderAddressesTableSeeder::class);
//        $this->call(EcOrderHistoriesTableSeeder::class);
//        $this->call(EcOrderProductTableSeeder::class);
//        $this->call(EcOrdersTableSeeder::class);
//        $this->call(EcProductAttributeSetsTableSeeder::class);
//        $this->call(EcProductAttributeSetsTranslationsTableSeeder::class);
//        $this->call(EcProductAttributesTableSeeder::class);
//        $this->call(EcProductAttributesTranslationsTableSeeder::class);
//        $this->call(EcProductCategoriesTableSeeder::class);
//        $this->call(EcProductCategoriesTranslationsTableSeeder::class);
//        $this->call(EcProductCategoryProductTableSeeder::class);
//        $this->call(EcProductCollectionProductsTableSeeder::class);
//        $this->call(EcProductCollectionsTableSeeder::class);
//        $this->call(EcProductCollectionsTranslationsTableSeeder::class);
//        $this->call(EcProductCrossSaleRelationsTableSeeder::class);
//        $this->call(EcProductLabelProductsTableSeeder::class);
//        $this->call(EcProductLabelsTableSeeder::class);
//        $this->call(EcProductLabelsTranslationsTableSeeder::class);
////        $this->call(EcProductRelatedRelationsTableSeeder::class);
//        $this->call(EcProductTagProductTableSeeder::class);
//        $this->call(EcProductTagsTableSeeder::class);
////        $this->call(EcProductTagsTranslationsTableSeeder::class);
////        $this->call(EcProductUpSaleRelationsTableSeeder::class);
//        $this->call(EcProductVariationItemsTableSeeder::class);
//        $this->call(EcProductVariationsTableSeeder::class);
//        $this->call(EcProductWithAttributeTableSeeder::class);
//        $this->call(EcProductWithAttributeSetTableSeeder::class);
//        $this->call(EcProductsTableSeeder::class);
//        $this->call(EcProductsTranslationsTableSeeder::class);
//        $this->call(EcReviewsTableSeeder::class);
//        $this->call(EcShipmentHistoriesTableSeeder::class);
//        $this->call(EcShipmentsTableSeeder::class);
//        $this->call(EcShippingTableSeeder::class);
////        $this->call(EcShippingRuleItemsTableSeeder::class);
//        $this->call(EcShippingRulesTableSeeder::class);
//        $this->call(EcStoreLocatorsTableSeeder::class);
//        $this->call(EcTaxesTableSeeder::class);
////        $this->call(EcWishListsTableSeeder::class);
////        $this->call(FailedJobsTableSeeder::class);
//        $this->call(FaqCategoriesTableSeeder::class);
//        $this->call(FaqCategoriesTranslationsTableSeeder::class);
//        $this->call(FaqsTableSeeder::class);
//        $this->call(FaqsTranslationsTableSeeder::class);
////        $this->call(JobsTableSeeder::class);
//        $this->call(LanguageMetaTableSeeder::class);
////        $this->call(LanguageMetaBackupTableSeeder::class);
//        $this->call(LanguagesTableSeeder::class);
//        $this->call(MediaFilesTableSeeder::class);
//        $this->call(MediaFoldersTableSeeder::class);
////        $this->call(MediaSettingsTableSeeder::class);
//        $this->call(MenuLocationsTableSeeder::class);
//        $this->call(MenuNodesTableSeeder::class);
//        $this->call(MenusTableSeeder::class);
//        $this->call(MetaBoxesTableSeeder::class);
//        $this->call(MigrationsTableSeeder::class);
////        $this->call(NewslettersTableSeeder::class);
//        $this->call(PagesTableSeeder::class);
//        $this->call(PagesTranslationsTableSeeder::class);
////        $this->call(PasswordResetsTableSeeder::class);
//        $this->call(PaymentsTableSeeder::class);
//        $this->call(PostCategoriesTableSeeder::class);
//        $this->call(PostTagsTableSeeder::class);
//        $this->call(PostsTableSeeder::class);
//        $this->call(PostsTranslationsTableSeeder::class);
////        $this->call(RevisionsTableSeeder::class);
////        $this->call(RoleUsersTableSeeder::class);
////        $this->call(RolesTableSeeder::class);
//        $this->call(SettingsTableSeeder::class);
//        $this->call(SimpleSliderItemsTableSeeder::class);
//        $this->call(SimpleSlidersTableSeeder::class);
//        $this->call(SlugsTableSeeder::class);
////        $this->call(StatesTableSeeder::class);
////        $this->call(StatesBackupTableSeeder::class);
////        $this->call(StatesTranslationsTableSeeder::class);
////        $this->call(SubscriptionItemsTableSeeder::class);
////        $this->call(SubscriptionsTableSeeder::class);
//        $this->call(TagsTableSeeder::class);
//        $this->call(TagsTranslationsTableSeeder::class);
//        $this->call(TestimonialsTableSeeder::class);
//        $this->call(TestimonialsTranslationsTableSeeder::class);
//        $this->call(TranslationsTableSeeder::class);
////        $this->call(UserMetaTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
//        $this->call(WidgetsTableSeeder::class);
    }
}
