
plugin.tx_oldgold_information {
    view {
        # cat=plugin.tx_oldgold_information/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:old_gold/Resources/Private/Templates/
        # cat=plugin.tx_oldgold_information/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:old_gold/Resources/Private/Partials/
        # cat=plugin.tx_oldgold_information/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:old_gold/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_oldgold_information//a; type=string; label=Default storage PID
        storagePid =
    }
}
