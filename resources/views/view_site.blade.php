<div id="cover" class="col-xs-12 col-md-8 col-md-offset-2 panel">
    <iframe id="eframe24" sandbox="allow-forms allow-same-origin allow-scripts" name="myframe24"></iframe>
    <div class="dark"></div>
    <div class="over">
        <h3 id="urlheader" class="fc"></h3>
        <h4 id="url1" dir="ltr" class="panel-desc"></h4>
        <a id="url" href="#" target="_blank"><h3 dir="ltr" class="panel-desc yel"></h3></a>
        <div id="progressTimer"></div>
        <br/>
        <h5 id="curstat"></h5>
        <h5 id="nextgift"></h5>
        <div id="p1" class="panel-desc"></div>

    </div>
    <h5 id="seenCount" class="seen"></h5>
</div>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script>

    var interval = 40000;
    let currentSite = {};

    function loadNewSite() {
        clearInterval(exec);
        $.ajax({
            url: "/api/visit",
            type: "POST",
            dataType: 'json',
            contentType: "application/json",
            data: JSON.stringify(model),
            success: function (results) {
                console.log(results);
                currentSite = results;
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
