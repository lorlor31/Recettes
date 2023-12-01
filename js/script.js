console.log ("jjh") ;


const editorModeButton=document.querySelector(".editorModeButton");
const editorModeButtonContainerClickZone=document.querySelector(".editorModeButtonContainer-clickZone") ;
const editorModeButtonInfo=document.querySelector(".editorModeButtonInfo") ;

const numOfPers=document.querySelector(".numOfPers") ;
const numOfPersLabel=document.querySelector(".numOfPersLabel") ;
const numOfPersInput=document.querySelector(".numOfPersInput") ;
let isActiveEditorMode=false ;

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



editorModeButtonContainerClickZone.addEventListener("click",()=>toggleEditorMode()) ;
editorModeButtonContainerClickZone.addEventListener("mouseover",()=>hoverEditorModeButtonInfo()) ;
editorModeButtonContainerClickZone.addEventListener("mouseout",()=>hoverEditorModeButtonInfo()) ;