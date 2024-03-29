<html>
<script src="https://bossanova.uk/jexcel/v3/jexcel.js"></script>
<link rel="stylesheet" href="https://bossanova.uk/jexcel/v3/jexcel.css" type="text/css" />
<script src="https://bossanova.uk/jsuites/v2/jsuites.js"></script>
<link rel="stylesheet" href="https://bossanova.uk/jsuites/v2/jsuites.css" type="text/css" />

<div id="spreadsheet1"></div>

<p><button id='download'>Export my spreadsheet as CSV</button></p>

<script>
mySpreadsheet = jexcel(document.getElementById('spreadsheet1'), {
    csv:'./demo.csv',
    csvHeaders:true,
    columns: [
        { type:'text', width:70 },
        { type:'text', width:200 },
        { type:'text', width:300 },
     ]
});

document.getElementById('download').onclick = function () {
    mySpreadsheet.download();
}
</script>
</html>