
/* insert.html*/
function insert_val(){
	//alert("here");
var name=document.insert_frm.emp_name.value;
var gen=document.insert_frm.gender.value;
var addr=document.insert_frm.address.value;
var dofb=document.insert_frm.dob.value;
var parent=document.insert_frm.p_name.value;
var contact=document.insert_frm.cont.value;
var email=document.insert_frm.email_id.value;
var departm=document.insert_frm.depat.value;
var divi=document.insert_frm.division.value;
var designa=document.insert_frm.desig.value;

var i=0;
var err_bor=null
	if (name==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your name");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if(gen==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your gender");
		err_bor.style.display='block';
		return false;
	}
	if(addr==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your address");
		err_bor.style.display='block';
		return false;
	}
	if(dofb==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your date of birth");
		err_bor.style.display='block';
		return false;
	}
	if(parent==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your parent name");
		err_bor.style.display='block';
		return false;
	}
	if(contact==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your contact");
		err_bor.style.display='block';
		return false;
	}
	if(email==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your email id");
		err_bor.style.display='block';
		return false;
	}
	if(departm==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your department");
		err_bor.style.display='block';
		return false;
	}
	if(divi==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your division");
		err_bor.style.display='block';
		return false;
	}
	if(designa==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your division");
		err_bor.style.display='block';
		return false;
	}

	if(i!=1){
		err_bor.style.display='none';
		return true;
	}
return false;
}

/* edit.html*/
function edit_val(){
	//alert("here");
var emp_no=document.insert_frm.emp_id.value;
var name=document.insert_frm.emp_name.value;
var gen=document.insert_frm.gender.value;
var addr=document.insert_frm.address.value;
var dofb=document.insert_frm.dob.value;
var parent=document.insert_frm.p_name.value;
var contact=document.insert_frm.cont.value;
var email=document.insert_frm.email_id.value;
var departm=document.insert_frm.depat.value;
var divi=document.insert_frm.division.value;
var designa=document.insert_frm.desig.value;

var i=0;
var err_bor=null
	if (emp_no==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your Employee Number");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if (name==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your name");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if(gen==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your gender");
		err_bor.style.display='block';
		return false;
	}
	if(addr==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your address");
		err_bor.style.display='block';
		return false;
	}
	if(dofb==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your date of birth");
		err_bor.style.display='block';
		return false;
	}
	if(parent==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your parent name");
		err_bor.style.display='block';
		return false;
	}
	if(contact==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your contact");
		err_bor.style.display='block';
		return false;
	}
	if(email==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your email id");
		err_bor.style.display='block';
		return false;
	}
	if(departm==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your department");
		err_bor.style.display='block';
		return false;
	}
	if(divi==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your division");
		err_bor.style.display='block';
		return false;
	}
	if(designa==""){
		i=1;
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide your division");
		err_bor.style.display='block';
		return false;
	}

	if(i!=1){
		err_bor.style.display='none';
		return true;
	}
return false;
}

/* del.html*/
function del_val(){
	//alert("here");
var emp_id=document.del_frm.emp_no.value;
var i=0;
var err_bor=null
	if (emp_id==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide Employee Number");
		err_bor.style.display='block';
		i=1;
		return false;
	}

	if(i!=1){
		err_bor.style.display='none';
		return true;
	}
return false;
}

/* search.html*/
function search_val(){
	//alert("here");
var emp_id=document.search_frm.emp_no.value;
var name=document.search_frm.emp_name.value;
var gen=document.search_frm.gender.value;

var i=0;
var err_bor=null
	if (emp_id==""||name==""||gen==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide Any Details");
		err_bor.style.display='block';
		i=1;
		return false;
	}

	if(i!=1){
		err_bor.style.display='none';
		return true;
	}
return false;
}

/* up_sal.html*/
function up_sal_val(){
	//alert("here");
var emp_id=document.upsal_frm.emp_no.value;
var b_pay=document.upsal_frm.basic_pay.value;
var da_pay=document.upsal_frm.da.value;
var pf_pay=document.upsal_frm.pf.value;
var hra_pay=document.upsal_frm.hra.value;

var i=0;
var err_bor=null
	if (emp_id==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide Employee Number");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if (b_pay==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide Basic Pay");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if (da_pay==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide DA (in %)");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if (pf_pay==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide PF (in %)");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	if (hra_pay==""){
		err_bor=document.getElementById('ins_err_box');
		err_bor.value=("Please provide HRA (in %)");
		err_bor.style.display='block';
		i=1;
		return false;
	}
	
	

	if(i!=1){
		err_bor.style.display='none';
		return true;
	}
return false;
}










