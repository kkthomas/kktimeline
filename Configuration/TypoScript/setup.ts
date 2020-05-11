
plugin.tx_kktimeline_kktimeline {
  view {
    templateRootPaths.0 = EXT:kk_timeline/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_kktimeline_kktimeline.view.templateRootPath
    partialRootPaths.0 = EXT:kk_timeline/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_kktimeline_kktimeline.view.partialRootPath
    layoutRootPaths.0 = EXT:kk_timeline/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_kktimeline_kktimeline.view.layoutRootPath
  }
  persistence {
    
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_kktimeline._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-kk-timeline table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-kk-timeline table th {
        font-weight:bold;
    }

    .tx-kk-timeline table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

page.includeJSFooterlibs.kktimeline = EXT:kk_timeline/Resources/Public/js/frst-timeline.min.js
page.includeCSSLibs.kktimline = EXT:kk_timeline/Resources/Public/css/frst-timeline-style-8.css
page.includeCSSLibs.kktimline2 = EXT:kk_timeline/Resources/Public/css/animate.css
page.includeCSSLibs.kktimline3 = EXT:kk_timeline/Resources/Public/css/default.min.css
