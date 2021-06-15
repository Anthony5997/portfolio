$(function () {
    let $app = ".app",
       $form = $(".form"),
       $button = $(".button"),
       $msgIcon = $(".fa-envelope"),
       $clIcon = $(".fa-times"),
       $completed = false;
 
    let $tl = new TimelineMax({
       onComplete: function () {
          $completed = true;
       }
    });
 
    function messageHandler() {
       if ($completed) {
          $tl.to($button, 0.5, { rotation: 45, ease: Power0.easeNone })
             .to($clIcon, 0.1, { rotation: -45 })
             .to($app, 0.5, { background: "#fffff" })
             .to($button, 0.3, { borderRadius: "0 100% 100%" }, "-=0.8")
             .to($button, 0.3, { background: "#FFCE54" }, "-=0.8")
             .to($msgIcon, 0.3, { display: "none" }, "-=0.6")
             .to($clIcon, 0.3, { display: "block" }, "-=0.3")
             .to($form, 0.5, { autoAlpha: 1 }, "-=0.5");
          $completed = false;
       }
    }
 
    function cancelHandler() {
       if ($completed) {
          $tl.to($button, 0.5, { rotation: -45, ease: Power0.easeNone })
             .to($form, 0.5, { autoAlpha: 0 }, "-=0.5")
             .to($msgIcon, 0.1, { rotation: 45 })
             .to($app, 0.5, { background: "#fffff" })
             .to($button, 0.3, { borderRadius: "100%" }, "-=0.8")
             .to($button, 0.3, { background: "#ED5565" }, "-=0.8")
             .to($clIcon, 0.3, { display: "none" }, "-=0.6")
             .to($msgIcon, 0.3, { display: "block" }, "-=0.3");
          $completed = false;
       }
    }
    $clIcon.click(cancelHandler);
    $msgIcon.click(messageHandler);
 });
 