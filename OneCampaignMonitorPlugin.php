<?php
namespace Craft;

class OneCampaignMonitorPlugin extends BasePlugin {

    public function getName() {
        return Craft::t('One Campaign Monitor (nfourtythree remix)');
    }

    public function getVersion() {
        return '0.1.8';
    }

    public function getDeveloper() {
        return 'One Design Company (nfourtythree remix)';
    }

    public function getDeveloperUrl() {
        return 'https://github.com/nfourtythree/onecampaignmonitor';
    }

    public function onAfterInstall() {}

    public function onBeforeUninstall() {}

    public function createTables() {}

    public function dropTables() {}

    public function registerSiteRoutes() { return []; }

    protected function defineSettings() {
        return array(
            'campaignmonitor_api_key' => array(AttributeType::String)
        );
    }

    public function getSettingsHtml() {
        return craft()->templates->render('onecampaignmonitor/settings', array(
            'settings' => $this->getSettings()
        ));
    }
}
