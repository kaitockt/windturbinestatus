window.addEventListener('DOMContentLoaded', function(){
    listItems()
})

function listItems(){
    // clear existing items
    document.getElementById('list').innerHTML = "";

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function(){
        json = this.responseText;
        obj = JSON.parse(json);

        for(const [key, value] of Object.entries(obj)) {
            const card = document.createElement('div');
            card.classList = 'rounded-lg justify-center h-28 px-1 py-2 border-2 my-1 text-sm flex justify-between md:w-1/5 w-1/2 items-center'

            const id = value['id']
            const cDmg = value['coating_dmg'] == 1
            const ls = value['ligntning_strike'] == 1

            if(!cDmg && !ls){
                //no damage
                text = id
                card.classList += " hover:bg-gray-200"

            } else if(cDmg && ls){
                //both
                text = "Coating Damage and Lightning Strike"
                card.classList += " bg-black text-white hover:bg-gray-800"

            } else if(cDmg){
                //coating damage only
                text = "Coating Damage"
                card.classList += " bg-red-600 hover:bg-red-400"

            } else if(ls){
                //Lightning Strike Only
                text = "Lightning Strike"
                card.classList += " bg-yellow-400 hover:bg-yellow-500"

            } else {
                // Something's wrong
                text = "ERR"
            }

            const span = document.createElement('span')
            span.classList = 'text-center mx-auto'
            span.innerHTML = text
            card.appendChild(span)

            document.getElementById('list').appendChild(card)
        }
    }
    xmlhttp.open("GET", "ajax.php");
    xmlhttp.send();
    }