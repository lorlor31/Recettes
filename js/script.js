console.log ("jjh") ;


const editorModeButton=document.querySelector(".editorModeButton")
const editorModeButtonContainer=document.querySelector(".editorModeButtonContainer") ;
const editorModeButtonInfo=document.querySelector(".editorModeButtonInfo") ;

const toggleEditorMode = function() {
    console.log("clickclick");
    editorModeButton.classList.toggle("clicked") ;
};

const hoverEditorModeButtonInfo = function() {
    console.log("hoov");
    let message = editorModeButton.classList.contains("clicked")==true 
        ? "Mode édition activé"
        : "Mode édition désactivé"
    editorModeButtonInfo.textContent=message;
    editorModeButtonInfo.classList.toggle("hovered") ;
};


editorModeButtonContainer.addEventListener("click",()=>toggleEditorMode()) ;
editorModeButtonContainer.addEventListener("mouseover",()=>hoverEditorModeButtonInfo()) ;
editorModeButtonContainer.addEventListener("mouseout",()=>hoverEditorModeButtonInfo()) ;