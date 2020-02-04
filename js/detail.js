$(document).ready( () => {
  // get the total avaible quantity
  const maxQuantity = parseInt( $('#available').text() );
  const minQuantity = 1;
  const qtyField = $('#quantity');
  // add listeners to plus
  $('#plus').click( () => {
    if( $(qtyField).val() <= maxQuantity && $(qtyField).val() >= minQuantity ) {
      $(qtyField).val() += $(qtyField).val();
      
    }
  })
})