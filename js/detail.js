$(document).ready( () => {
  // get the total avaible quantity
  const maxQuantity = parseInt( $('#available').text() );
  const minQuantity = 1;
  const qtyField = $('#quantity');
  let currentQty = $(qtyField).val();
  // add listeners to plus
  $('#plus').click( () => {
    if( currentQty <= maxQuantity && currentQty >= minQuantity ) {
      currentQty++;
      $(qtyField).val(currentQty);
    }
  })
})