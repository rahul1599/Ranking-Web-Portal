const slidePage = document.queryselector(".slidepage");
const firstNextBtn = document.queryselector(".nextBtn"); 

firstNextBtn.addEventlistener("click", function(){
         slidePage.style.marginLeft = "-25%";
});