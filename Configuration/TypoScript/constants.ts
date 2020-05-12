
plugin.tx_kktimeline_kktimeline {
  view {
    # cat=plugin.tx_kktimeline_kktimeline/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:kktimeline/Resources/Private/Templates/
    # cat=plugin.tx_kktimeline_kktimeline/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:kktimeline/Resources/Private/Partials/
    # cat=plugin.tx_kktimeline_kktimeline/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:kktimeline/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_kktimeline_kktimeline//a; type=string; label=Default storage PID
    storagePid =
  }
}
