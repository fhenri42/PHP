window.onload = function()
{
	function getCookie(cookieName) 
	{
		var name = cookieName + "=";
		var cookieList = document.cookie.split(';');
		for(var i = 0; i < cookieList.length; i++) {
			var cookie = cookieList[i];
			while (cookie.charAt(0)==' ') {
				cookie = cookie.substring(1);
			}
			if (cookie.indexOf(name) == 0) {
				return cookie.substring(name.length,cookie.length);
			}
		}
		return null;
	}
	function setCookie(name, value, days)
	{
		if (days)
		{
    		var d = new Date();
    		d.setTime(d.getTime() + (days*24*60*60*1000));
    		var expires = "expires="+d.toUTCString();
    	}
    	else
   			var expires =""; 
    document.cookie = name + "=" + value + "; " + expires;
	}
	next = 0;
	function add_task(str)
	{
		next++;
		itemId = "cooki_todo" + next;
		setCookie(itemId, str, 10000);
		var newItem = document.createElement("LI");
		newItem.id = itemId;
		newItem.appendChild(document.createTextNode(str));
		newItem.addEventListener("click", function(lol)
		{
			var verife = confirm("Are you sure you want to delete this todo?");
			if (verife)
			{
			setCookie(lol.target.id, "", -1);
			lol.target.remove();
			}
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
	var cookieList = document.cookie.split(';');
	var i = 0;
	while(i < cookieList.length) 
	{
		var cookie = cookieList[i];
		while (cookie.charAt(0)==' ')
			cookie = cookie.substring(1);
		if (cookie.indexOf("cooki_todo") === 0) 
		{
			var fake_cookie = cookie.split('=');
			var index = fake_cookie[0];
			var value = fake_cookie[1];
			setCookie(index, "", -1);
			add_task(value);
		}
		i++;
	}
}