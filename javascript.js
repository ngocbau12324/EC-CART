//thay đổi số lượng sản phẩm
var select = document.querySelector('#qty');
select.addEventListener("change",function(){
    document.querySelector(".item-qty").innerText='Số lượng: '+select.value;
})
//thay đổi số lượng sản phẩm