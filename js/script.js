console.log ("jjh") ;


const editorModeButton=document.querySelector(".editorModeButton");
const editorModeButtonContainerClickZone=document.querySelector(".editorModeButtonContainer-clickZone") ;
const editorModeButtonInfo=document.querySelector(".editorModeButtonInfo") ;

const numOfPers=document.querySelector(".numOfPers") ;
const numOfPersLabel=document.querySelector(".numOfPersLabel") ;
const numOfPersInput=document.querySelector(".numOfPersInput") ;
const form=document.getElementsByTagName("form")[0] ;
let isActiveEditorMode=false ;


let numOfPersDep=numOfPers.dataset.persons;
console.log(numOfPersDep);
let customNumOfPers=1;
const ingredientsElements = document.querySelectorAll(".ingredients ul li") ;

const toggleEditorMode = function() {
    console.log("clickclick");
    editorModeButton.classList.toggle("clicked") ;
    isActiveEditorMode = editorModeButton.classList.contains("clicked") 
    numOfPers.classList.toggle("invisible") ;
    numOfPersLabel.classList.toggle("invisible") ;
    numOfPersInput.classList.toggle("invisible") ;
};

const hoverEditorModeButtonInfo = function() {
    console.log("hoov");
    let message = editorModeButton.classList.contains("clicked")==true 
        ? "Mode édition activé"
        : "Mode édition désactivé"
    editorModeButtonInfo.textContent=message;
    editorModeButtonInfo.classList.toggle("hovered") ;
};


const handleUserInput = function (event) {
    event.preventDefault();
    customNumOfPers=numOfPersInput.value ;
    console.log(customNumOfPers);
    for (let ingredientElement of ingredientsElements) {
        ingredientDep=ingredientElement.querySelector("span").textContent;
        console.log(typeof(ingredientDep))
        Number.isInteger(parseInt(ingredientDep) )
        ? calcCustomIngredients(ingredientDep,ingredientElement) 
        :  ingredientDep
    
    }
    
}
//refaire en prenant comme valeur dedepart celles qu'on voit pour que ca marche à la
//deuxieme cal=cul
const calcCustomIngredients = function (ingredientDep,ingredientElement) {
    ingredientEnd=ingredientDep/numOfPersDep*customNumOfPers ;
    ingredientElement.querySelector("span").textContent=ingredientEnd ; 
}




editorModeButtonContainerClickZone.addEventListener("click",()=>toggleEditorMode()) ;
editorModeButtonContainerClickZone.addEventListener("mouseover",()=>hoverEditorModeButtonInfo()) ;
editorModeButtonContainerClickZone.addEventListener("mouseout",()=>hoverEditorModeButtonInfo()) ;
form.addEventListener("submit",handleUserInput) ;