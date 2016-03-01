<html>
<head>
<style>
    #vertgraph {                    
        width: 378px; 
        height: 207px; 
        position: relative; 
        background: url("g_backbar.gif") no-repeat; 
    }
    #vertgraph ul { 
        width: 378px; 
        height: 207px; 
        margin: 0; 
        padding: 0; 
    }
    #vertgraph ul li {  
        position: absolute; 
        width: 28px; 
        height: 160px; 
        bottom: 34px; 
        padding: 0 !important; 
        margin: 0 !important; 
        background: url("g_colorbar3.jpg") no-repeat !important;
        text-align: center; 
        font-weight: bold; 
        color: white; 
        line-height: 2.5em;
    }

    #vertgraph li.critical { left: 24px; background-position: 0px bottom !important; }
    #vertgraph li.high { left: 101px; background-position: -28px bottom !important; }
    #vertgraph li.medium { left: 176px; background-position: -56px bottom !important; }
    #vertgraph li.low { left: 251px; background-position: -84px bottom !important; }
    #vertgraph li.info { left: 327px; background-position: -112px bottom !important; }
</style>
</head>
<body>
<div id="vertgraph">
    <ul>
        <li class="critical" style="height: 150px;">22</li>
        <li class="high" style="height: 80px;">7</li>
        <li class="medium" style="height: 50px;">3</li>
        <li class="low" style="height: 90px;">8</li>
        <li class="info" style="height: 40px;">2</li>
    </ul>
</div>
</body>
</html>