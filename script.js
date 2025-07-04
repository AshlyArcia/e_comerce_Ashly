
  let carrinho = [];
  let total = 0;

  function adicionarAoCarrinho(produto, preco) {
    carrinho.push({ produto, preco });
    total += preco;
    atualizarCarrinho();
  }

  function atualizarCarrinho() {
    const lista = document.getElementById("lista-carrinho");
    const totalSpan = document.getElementById("total");

    lista.innerHTML = "";
    carrinho.forEach(item => {
      const li = document.createElement("li");
      li.textContent = `${item.produto} - R$ ${item.preco.toFixed(2)}`;
      lista.appendChild(li);
    });

    totalSpan.textContent = total.toFixed(2);
  }
function toggleDarkMode() {
    const root = document.documentElement;
    const icon = document.getElementById("iconMode");
    const checkbox = document.getElementById("modoToggle");

    root.classList.toggle('dark');

    if (root.classList.contains('dark')) {
      localStorage.setItem('modo', 'escuro');
      icon.textContent = "☀️";
      checkbox.checked = true;
    } else {
      localStorage.setItem('modo', 'claro');
      icon.textContent = "🌙";
      checkbox.checked = false;
    }
  }

 
  window.addEventListener('DOMContentLoaded', () => {
    const modoSalvo = localStorage.getItem('modo');
    const icon = document.getElementById("iconMode");
    const checkbox = document.getElementById("modoToggle");

    if (modoSalvo === 'escuro') {
      document.documentElement.classList.add('dark');
      icon.textContent = "☀️";
      checkbox.checked = true;
    } else {
      document.documentElement.classList.remove('dark');
      icon.textContent = "🌙";
      checkbox.checked = false;
    }
  });