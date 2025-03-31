



<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Invoice Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./web/modern-normalize.css">
  <link rel="stylesheet" href="./web/web-base.css">
  <link rel="stylesheet" href="./invoice.css">
  <script type="text/javascript" src="./web/scripts.js"></script>
</head>
<body>
<div class="out">


  <div class="web-container" id="confirmation">

    <!-- See invoice.html! It is injected here... -->

  </div>
</div>
<input class="button" type="button" id="download" value="Download">

<script type="text/javascript">
  load(document.querySelector('.web-container'), './invoice.php');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script>
  window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const confirmation = this.document.getElementById("confirmation");
            // console.log(confirmation);
            // console.log(window);
            //html2pdf().from(confirmation).save();
            var opt = {
                margin: 0,
                filename: 'confirmation.pdf',
                image: { type: 'jpeg', quality: .98 },
                html2canvas: { scale: 5 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
            html2pdf().from(confirmation).set(opt).save(); 
        })
}
</script>


</body></html>
