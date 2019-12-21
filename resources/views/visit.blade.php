<div id="cover" class="col-xs-12 col-md-8 col-md-offset-2 panel">
    <iframe name="frame" sandbox="allow-forms allow-same-origin allow-scripts"></iframe>
</div>
<div>visited me : <span id="visited_me"></span></div>
<div>visited other : <span id="visited_other"></span></div>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script>

    var interval = 1000;
    let currentSite = {};
    let stats = {};
    let logId = 0;

    function loadNewSite() {
        clearInterval(exec);
        $.ajax({
            url: "/api/visit",
            type: "POST",
            dataType: 'json',
            contentType: "application/json",
            data: JSON.stringify({
                me: {{ $me->id }},
                logId: logId,
                visited: currentSite,
            }),
            success: function (results) {
                currentSite = results.newSite;
                stats = results.stats;
                logId = results.logId;
                // window.open(currentSite.url, "frame");
            },
            complete: function () {
                exec = window.setInterval(loadNewSite, interval);
            }
        });
    }

    var exec = window.setInterval(loadNewSite, 1000);
</script>


</body>
</html>
