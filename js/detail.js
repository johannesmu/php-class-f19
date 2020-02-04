const minQuantity = 1;
// to be updated when page loads
let maxQuantity = 0;
let currentQty = 0;
let itemPrice = 0;

function updateTotalPrice( qty, price ) {

}

$(document).ready( () => {
  // get the total avaible quantity
  maxQuantity = parseInt( $('#available').text() );
  const qtyField = $('#quantity');
  currentQty = $(qtyField).val();
  itemPrice = parseFloat( $('.price').text() );
  // add listeners to plus
  $('#plus').click( () => {
    if( currentQty < maxQuantity && currentQty >= minQuantity ) {
      currentQty++;
      $(qtyField).val(currentQty);
    }
  })
  $('#minus').click( () => {
    if( currentQty <= maxQuantity && currentQty > minQuantity ) {
      currentQty--;
      $(qtyField).val(currentQty);
    }
  })
})
