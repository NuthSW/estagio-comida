$(document).ready(function(){
  var QtyInput = (function () {
    var $qtyInputs = $(".qty-input");
  
    if (!$qtyInputs.length) {
      return;
    }
  
    var $inputs = $qtyInputs.find(".product-qty");
    var $countBtn = $qtyInputs.find(".qty-count");
    var qtyMin = parseInt($inputs.attr("min"));
    var qtyMax = parseInt($inputs.attr("max"));
  
    $inputs.change(function () {
      var $this = $(this);
      var $minusBtn = $this.siblings(".qty-count--minus");
      var $addBtn = $this.siblings(".qty-count--add");
      var qty = parseInt($this.val());

      alert(id);
  
      if (isNaN(qty) || qty <= qtyMin) {
        $this.val(qtyMin);
        $minusBtn.attr("disabled", true);
      } else {
        $minusBtn.attr("disabled", false);
        
        if(qty >= qtyMax){
          $this.val(qtyMax);
          $addBtn.attr('disabled', true);
        } else {
          $this.val(qty);
          $addBtn.attr('disabled', false);
        }
      }
    });
  
    $countBtn.click(function () {
      var operator = this.dataset.action;
      var $this = $(this);
      var $input = $this.siblings(".product-qty");
      var qty = parseInt($input.val());

        
      
  
      if (operator == "add") {
        //var id3 = $(this).data("id");
        var id3 =  $(this).attr('id');
        //alert(id3);
        id_quebra = id3.split('|');
        //id_quebra[0] = nome id_quebra[1] = chave primaria  
        qty += 1;
        


        $("input:checked").each(function(){
          //var id2 = $(this).val();
          $('#'+id_quebra[1]).attr('value',qty);
        });
        if (qty >= qtyMin + 1) {
          $this.siblings(".qty-count--minus").attr("disabled", false);
        }
  
        if (qty >= qtyMax) {
          $this.attr("disabled", true);
        }
      } else {
        //var id3 = $(this).data("id");
        var id3 =  $(this).attr('id');
        //alert(id3);
        id_quebra = id3.split('|');
        qty = qty <= qtyMin ? qtyMin : (qty -= 1);


        $("input:checked").each(function(){
          //var id2 = $(this).val();
          $('#'+id_quebra[1]).attr('value',qty);
        });
        
        if (qty == qtyMin) {
          $this.attr("disabled", true);
        }
  
        if (qty < qtyMax) {
          $this.siblings(".qty-count--add").attr("disabled", false);
        }
      }
  
      $input.val(qty);
      
    });
  })();

})