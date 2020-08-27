
<div class="widget center" style="margin-bottom:0;overflow:hidden;background-color: white">
    <div class="dimmer"></div>
    <!-- Chart's container -->
    <div id="sales" style="height: 300px;"></div>
    <div class="panel-content">
        <script>
            const sales = new Chartisan({
                el: '#sales',
                url: "@chart('saleschart')",
                hooks: new ChartisanHooks()
                    .legend({position: 'bottom'})
                    .title('Salidas')
                    .datasets([{type: 'bar', fill: true,}, 'bar']),
            });
        </script>
    </div>
</div>
