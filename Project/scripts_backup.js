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
  "MB",
  "SJT",
  "TT",
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
let names1 = [
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
let sortedNames1 = names1.sort();

//reference
let input = document.getElementById("state0");
let input1 = document.getElementById("state1");

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
input1.addEventListener("keyup", (e) => {
  //loop through above array
  //Initially remove all elements ( so if user erases a letter or adds new letter then clean previous outputs)
  removeElements1();
  for (let i of sortedNames1) {
    //convert input to lowercase and compare with each string

    if (
      i.toLowerCase().startsWith(input1.value.toLowerCase()) &&
      input1.value != ""
    ) {
      //create li element
      let listItem1 = document.createElement("li");
      //One common class name
      listItem1.classList.add("list-items1");
      listItem1.style.cursor = "pointer";
      listItem1.setAttribute("onclick", "displayNames1('" + i + "')");
      //Display matched part in bold
      let word1 = "<b>" + i.substr(0, input1.value.length) + "</b>";
      word1 += i.substr(input1.value.length);
      //display the value in array
      listItem1.innerHTML = word1;
      document.querySelector(".list1").appendChild(listItem1);
    }
  }
});




function displayNames(value) {
  input.value = value;
  removeElements();
}
function displayNames1(value) {
  input1.value = value;
  removeElements1();
}
function removeElements() {
  //clear all the item
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
}
function removeElements1() {
  //clear all the item
  let items = document.querySelectorAll(".list-items1");
  items.forEach((item) => {
    item.remove();
  });
}