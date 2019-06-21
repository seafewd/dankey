 function addToCart(name, price) {
    $.toast({
        heading: 'Product added!',
        text: name + ' has been added to your cart.',
        showHideTransition: 'fade',
        icon: 'success',
        position: 'bottom-right',
        loader: false,
        bgColor: 'rgba(8,98,32,.7)',
        stack: 10,
        hideAfter: 5000
    });

     //var finalName = name.replace(" ", "_");
     let root = 'http://' + document.location.hostname + '/dankey/public/shopping.php?';
     var params = "name=" + name + "&price=" + price;



     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function() {
         if (this.readyState === 4 && this.status === 200) {
             var subtotal = parseInt(document.getElementById('subprice').innerHTML);
             var id = "qty_" + name;
             id = id.replace(/ /g,"_");
             var qty = parseInt(document.getElementById(id).value);
             var new_qty = qty + 1;

             if (new_qty < 0) {
                 new_qty = 0;
             }
             document.getElementById(id).value = new_qty;
             document.getElementById('subprice').innerHTML = subtotal + price + '.-';
         }
     };
     xmlhttp.open("GET", root+params , true);
     xmlhttp.send();

}
