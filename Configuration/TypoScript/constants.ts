
plugin.tx_kktimeline_kktimeline {
  view {
    # cat=plugin.tx_kktimeline_kktimeline/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:kk_timeline/Resources/Private/Templates/
    # cat=plugin.tx_kktimeline_kktimeline/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:kk_timeline/Resources/Private/Partials/
    # cat=plugin.tx_kktimeline_kktimeline/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:kk_timeline/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_kktimeline_kktimeline//a; type=string; label=Default storage PID
    storagePid =
  }
}
