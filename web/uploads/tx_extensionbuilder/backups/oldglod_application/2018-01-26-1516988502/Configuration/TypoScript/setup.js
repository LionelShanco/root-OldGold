plugin.tx_oldglodapplication_information;
{
    view;
    {
        templateRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Templates /
            templateRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_information.view.templateRootPath };
        partialRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Partials /
            partialRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_information.view.partialRootPath };
        layoutRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Layouts /
            layoutRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_information.view.layoutRootPath };
    }
    persistence;
    {
        storagePid = { $plugin: .tx_oldglodapplication_information.persistence.storagePid };
        recursive = 1;
    }
    features;
    {
        skipDefaultArguments = 1;
        if (set)
            to;
        1, the;
        enable;
        fields;
        are;
        ignored in BE;
        context;
        ignoreAllEnableFieldsInBe = 0;
        Should;
        be;
        on;
        by;
        but;
        can;
        be;
        disabled;
        if (all)
            action in the;
        plugin;
        are;
        uncached;
        requireCHashArgumentForActionArguments = 1;
    }
    mvc;
    {
        callDefaultActionIfActionCantBeResolved = 1;
    }
}
plugin.tx_oldglodapplication_management;
{
    view;
    {
        templateRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Templates /
            templateRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_management.view.templateRootPath };
        partialRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Partials /
            partialRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_management.view.partialRootPath };
        layoutRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Layouts /
            layoutRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_management.view.layoutRootPath };
    }
    persistence;
    {
        storagePid = { $plugin: .tx_oldglodapplication_management.persistence.storagePid };
        recursive = 1;
    }
    features;
    {
        skipDefaultArguments = 1;
        if (set)
            to;
        1, the;
        enable;
        fields;
        are;
        ignored in BE;
        context;
        ignoreAllEnableFieldsInBe = 0;
        Should;
        be;
        on;
        by;
        but;
        can;
        be;
        disabled;
        if (all)
            action in the;
        plugin;
        are;
        uncached;
        requireCHashArgumentForActionArguments = 1;
    }
    mvc;
    {
        callDefaultActionIfActionCantBeResolved = 1;
    }
}
plugin.tx_oldglodapplication_administration;
{
    view;
    {
        templateRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Templates /
            templateRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_administration.view.templateRootPath };
        partialRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Partials /
            partialRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_administration.view.partialRootPath };
        layoutRootPaths;
        .0 = EXT;
        oldglod_application / Resources / Private / Layouts /
            layoutRootPaths;
        .1 = { $plugin: .tx_oldglodapplication_administration.view.layoutRootPath };
    }
    persistence;
    {
        storagePid = { $plugin: .tx_oldglodapplication_administration.persistence.storagePid };
        recursive = 1;
    }
    features;
    {
        skipDefaultArguments = 1;
        if (set)
            to;
        1, the;
        enable;
        fields;
        are;
        ignored in BE;
        context;
        ignoreAllEnableFieldsInBe = 0;
        Should;
        be;
        on;
        by;
        but;
        can;
        be;
        disabled;
        if (all)
            action in the;
        plugin;
        are;
        uncached;
        requireCHashArgumentForActionArguments = 1;
    }
    mvc;
    {
        callDefaultActionIfActionCantBeResolved = 1;
    }
}
these;
classes;
are;
only;
used in auto - generated;
templates;
plugin.tx_oldglodapplication._CSS_DEFAULT_STYLE(textarea.f3 - form - error, {
    background: -color, FF9F9F: ,
    border: 1, px: , FF0000: solid
}, input.f3 - form - error, {
    background: -color, FF9F9F: ,
    border: 1, px: , FF0000: solid
}
    .tx - oldglod - application, table, {
    border: -collapse, separate: ,
    border: -spacing, 10: px
}
    .tx - oldglod - application, table, th, {
    font: -weight, bold: 
}
    .tx - oldglod - application, table, td, {
    vertical: -align, top: 
}
    .typo3 - messages.message - error, {
    color: red
}
    .typo3 - messages.message - ok, {
    color: green
});
