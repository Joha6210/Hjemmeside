var input_box = document.getElementById("value");

input_box.addEventListener("input", function(){

    input_value = input_box.value;
    document.getElementById("head1").innerHTML = input_value;
})
