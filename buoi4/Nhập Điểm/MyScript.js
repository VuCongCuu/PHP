function check(input_text){
  if(input_text.value==""){
      bao= document.getElementById("baoloi");
      bao.innerHTML="Chưa nhập dữ liêu";
      input_text.focus();
      return false;
  }
  if(isNaN(input_text.value)){
    bao= document.getElementById("baoloi");
    bao.innerHTML="Phải nhập số";
    input_text.focus();
    return false;
    }
    if(parseFloat(input_text.value)<0||parseFloat(input_text.value)>10){
        bao= document.getElementById("baoloi");
        bao.innerHTML="Điểm phai >0 và <10";
        input_text.focus();
        return false;
        }
}
function kiemtra(){
    tToan= document.getElementById("toan");
    tVan= document.getElementById("van");
    tVan= document.getElementById("anh");
    if(tToan.value=="" || tVan.value=="" || tAnh.value==""){
        alert("Nhập đầy đủ thông tin");
        return false;
    }
    if(isNaN(tToan.value)||isNaN(tVan.value)||isNaN(tAnh.value))
	{
		alert("điểm phải nhập số");
		return false;
	}
    fToan= parseFloat(tToan.value);
    fVan= parseFloat(tVan.value);
    fAnh= parseFloat(tAnh.value);
    if(fToan<0 || fToan >10||fVan<0 || fVan >10||fAnh<0 || fAnh >10){
        alert("Điểm phai >0 và <10");
        return false;
    }

}