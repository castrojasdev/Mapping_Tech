/*

*/
let names = [
    "A block",
    "B block",
    "C block",
    "D block",
    "F block",
    "G block",
    "H block",
    "J block",
    "K block",
    "L block",
    "M block",
    "N block",
    "P block",
    "Q block",
    "R block",
    "SJT",
    "Technology Tower(TT)",
    "SMV",
    "PRP",
    "MGB",
    "MGR Block",
    "LIBRARY",
    "CANTEEN",
    "Enzo",
    "BARBOUR SHOP",
    "ALLMART",
    "Main Gate",
    "Third gate",
    "SJT Gate",
    "Second Gate",
  ];
  //Sort names in ascending order
  let sortedNames = names.sort();
  
  //reference
  let input = document.getElementById("state0");
  
  //Execute function on keyup
  input.addEventListener("keyup", (e) => {
    //loop through above array
    //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
    removeElements();
    for (let i of sortedNames) {
      //convert input to lowercase and compare with each string
  
      if (
        i.toLowerCase().startsWith(input.value.toLowerCase()) &&
        input.value != ""
      ) {
        //create li element
        let listItem = document.createElement("li");
        //One common class name
        listItem.classList.add("list-items");
        listItem.style.cursor = "pointer";
        listItem.setAttribute("onclick", "displayNames('" + i + "')");
        //Display matched part in bold
        let word = "<b>" + i.substr(0, input.value.length) + "</b>";
        word += i.substr(input.value.length);
        //display the value in array
        listItem.innerHTML = word;
        document.querySelector(".list").appendChild(listItem);
      }
    }
  });
  function displayNames(value) {
    input.value = value;
    removeElements();
  }
  function removeElements() {
    //clear all the item
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
      item.remove();
    });
  }
  
  
  
  
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  let namess = [
    "A block",
    "B block",
    "C block",
    "D block",
    "F block",
    "G block",
    "H block",
    "J block",
    "K block",
    "L block",
    "M block",
    "N block",
    "P block",
    "Q block",
    "R block",
    "SJT",
    "Technology Tower(TT)",
    "SMV",
    "PRP",
    "MGB",
    "MGR Block",
    "LIBRARY",
    "CANTEEN",
    "Enzo",
    "BARBOUR SHOP",
    "ALLMART",
    "Main Gate",
    "Third gate",
    "SJT Gate",
    "Second Gate",
  ];
  //Sort name in ascending order
  let sorted = namess.sort();
  
  //reference
  let inputs = document.getElementById("state1");
  
  //Execute function on keyup
  inputs.addEventListener("keyup", (e) => {
    //loop through above array
    //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
    removeElements();
    for (let i of sorted) {
      //convert inputs to lowercase and compare with each string
  
      if (
        i.toLowerCase().startsWith(inputs.value.toLowerCase()) &&
        inputs.value != ""
      ) {
        //create li element
        let listItem = document.createElement("li");
        //One common class name
        listItem.classList.add("list-items");
        listItem.style.cursor = "pointer";
        listItem.setAttribute("onclick", "displayNames('" + i + "')");
        //Display matched part in bold
        let word = "<b>" + i.substr(0, inputs.value.length) + "</b>";
        word += i.substr(inputs.value.length);
        //display the value in array
        listItem.innerHTML = word;
        document.querySelector(".list").appendChild(listItem);
      }
    }
  });
  function displayNames(value) {
    inputs.value = value;
    removeElements();
  }
  function removeElements() {
    //clear all the item
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
      item.remove();
    });
  }
  