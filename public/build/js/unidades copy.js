!function(){!async function(){new FormData;try{const e="http://localhost:3000/api/unidades",n=await fetch(e,{method:"Get"}),t=await n.json();console.log(t),a=t.units,function(){const e=document.querySelector("#listado-tareas");if(0===a.length){const a=document.createElement("li");a.textContent="No Hay unidades",a.classList.add("no-tareas"),e.appendChild(a)}else for(let n=0;n<a.length;n++){let t=a[n],s=document.createElement("li");s.dataset.tareaId=t.id,s.innerHTML=`\n                        <div class= "tarea">\n                        <p><span>Nombre: </span>${t.name}</p>\n                        <p><span>Ataque: </span>${t.attack}</p>\n                        <p><span>Ataque-espera: </span>${t.attack_delay}</p>\n                        <p><span>Tiempo de Creacion: </span>${t.build_time}</p>\n                        <p><span>Edad </span>${t.age}</p>\n                        </div>\n                        `,e.appendChild(s)}}()}catch(a){console.log(a)}}();let a=[]}();