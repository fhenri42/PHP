window.onload = function()
{
	var all_task = [""];
	var i = 0;
	var list = document.getElementById("ft_list");

	function setCookie(name, value, days)
	{
    var d = new Date();
    d.setTime(d.getTime() + (days*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = name + "=" + value + "; " + expires;
	}

	function add_task(str)
	{
		itemId = "test" + 1;
		setCookie(itemId, str, 10000);
		var newItem = document.createElement("LI");
		newItem.id = itemId;
		newItem.appendChild(document.createTextNode(str));
		newItem.addEventListener("click", function(lol)
		{
			var verife = confirm("Are you sure you want to delete this todo?");
			if (verife)
			lol.target.remove();
		});
		var list = document.getElementById("ft_list");
		list.insertBefore(newItem, list.childNodes[0]);
	}

	var newB = document.getElementById("add_item");
	newB.addEventListener("click", function()
	{
	var new_Text = prompt("Enter the task name", "");
	if (new_Text)
		add_task(new_Text);
	});
}