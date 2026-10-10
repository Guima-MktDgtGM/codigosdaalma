<style>

  .relatorio-container {
    min-height: 100vh;
  }

  .img-relatorio {
    display: block;
    max-width: 100%;
    max-height: 400px;
    width: auto;
    height: auto;
    object-fit: cover;
    margin: 1rem auto;
    border-radius: 14px;
  }

  /* RESPONSIVIDADE PARA CHALLENGE NUMBERS */
  @media (max-width: 767px) {
    /* Container principal responsivo */
    .relatorio-container {
      padding: 10px;
      overflow-x: hidden;
    }
    
    /* Mobile - fontes responsivas usando clamp automático */
    [style*="font-size: 4em"],
    [style*="font-size: 3em"],
    [style*="font-size: 2.8em"],
    [style*="font-size: 2.5em"] { 
      font-size: clamp(1.5rem, 5vw, 2rem) !important; 
    }
    
    [style*="font-size: 2em"],
    [style*="font-size: 1.8em"],
    [style*="font-size: 1.6em"],
    [style*="font-size: 1.5em"] { 
      font-size: clamp(1.1rem, 3.5vw, 1.3rem) !important; 
    }
    
    [style*="font-size: 1.4em"],
    [style*="font-size: 1.3em"],
    [style*="font-size: 1.2em"],
    [style*="font-size: 1.1em"] { 
      font-size: clamp(0.9rem, 2.5vw, 1rem) !important; 
    }
    
    /* Padding e margin usando clamp */
    [style*="padding: 35px"],
    [style*="padding: 30px"],
    [style*="padding: 28px"] { 
      padding: clamp(12px, 3vw, 20px) !important; 
    }
    
    [style*="padding: 25px"],
    [style*="padding: 22px"],
    [style*="padding: 20px"] { 
      padding: clamp(8px, 2.5vw, 15px) !important; 
    }
    
    [style*="margin: 30px"],
    [style*="margin: 25px"] { 
      margin: clamp(10px, 2.5vw, 15px) !important; 
    }
    
    [style*="margin: 22px"],
    [style*="margin: 20px"],
    [style*="margin: 18px"],
    [style*="margin: 15px"] { 
      margin: clamp(6px, 2vw, 10px) !important; 
    }
    
    /* Gap usando clamp */
    [style*="gap: 25px"],
    [style*="gap: 22px"],
    [style*="gap: 18px"],
    [style*="gap: 15px"] { 
      gap: clamp(8px, 2vw, 12px) !important; 
    }
    
    /* Layout flex responsivo */
    [style*="display: flex"] {
      flex-wrap: wrap !important;
    }
    
    [style*="display: flex"][style*="align-items: flex-start"] {
      flex-direction: column !important;
      align-items: center !important;
      text-align: center !important;
    }
    
    /* Grid sempre em coluna única no mobile */
    [style*="grid-template-columns"] {
      grid-template-columns: 1fr !important;
      gap: clamp(8px, 2vw, 12px) !important;
    }
    
    /* Border radius responsivo */
    [style*="border-radius: 22px"] { border-radius: clamp(8px, 2vw, 12px) !important; }
    [style*="border-radius: 20px"] { border-radius: clamp(8px, 2vw, 10px) !important; }
    [style*="border-radius: 18px"] { border-radius: clamp(6px, 2vw, 10px) !important; }
    [style*="border-radius: 16px"] { border-radius: clamp(6px, 1.5vw, 8px) !important; }
    [style*="border-radius: 15px"] { border-radius: clamp(6px, 1.5vw, 8px) !important; }
    
    /* Flex-shrink para ícones */
    [style*="flex-shrink: 0"] {
      align-self: center !important;
      margin-bottom: 10px;
    }
    
    /* Text-shadow menor em mobile */
    [style*="text-shadow:"] {
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5) !important;
    }
    
    /* Box-shadow menor em mobile */
    [style*="box-shadow: 0 18px 45px"] { 
      box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important; 
    }
    [style*="box-shadow: 0 15px 40px"] { 
      box-shadow: 0 6px 15px rgba(0,0,0,0.2) !important; 
    }
    [style*="box-shadow: 0 8px 25px"] { 
      box-shadow: 0 4px 12px rgba(0,0,0,0.15) !important; 
    }
  }
  
  @media (min-width: 768px) and (max-width: 1023px) {
    /* Tablet - tamanhos intermediários */
    [style*="font-size: 4em"] { font-size: clamp(2.5em, 4vw, 3.2em) !important; }
    [style*="font-size: 3em"] { font-size: clamp(2em, 3.5vw, 2.5em) !important; }
    [style*="font-size: 2.8em"] { font-size: clamp(1.8em, 3vw, 2.2em) !important; }
    [style*="font-size: 2.5em"] { font-size: clamp(1.6em, 2.8vw, 2em) !important; }
    
    [style*="padding: 35px"] { padding: clamp(20px, 3vw, 25px) !important; }
    [style*="padding: 30px"] { padding: clamp(18px, 2.5vw, 22px) !important; }
    [style*="padding: 28px"] { padding: clamp(16px, 2.5vw, 20px) !important; }
    [style*="padding: 25px"] { padding: clamp(15px, 2vw, 18px) !important; }
    
    [style*="gap: 25px"] { gap: clamp(15px, 2.5vw, 18px) !important; }
    [style*="gap: 22px"] { gap: clamp(14px, 2vw, 16px) !important; }
    
    /* Layout flex mais adaptável para tablets */
    [style*="display: flex"][style*="align-items: flex-start"] {
      flex-direction: row !important;
      align-items: flex-start !important;
      text-align: left !important;
    }
  }

  @media (min-width: 1024px) {
    /* Desktop - manter tamanhos originais mas com limites */
    [style*="font-size: 4em"] { font-size: clamp(3em, 3.5vw, 4em) !important; }
    [style*="font-size: 2.8em"] { font-size: clamp(2.2em, 2.5vw, 2.8em) !important; }
    
    [style*="padding: 35px"] { padding: clamp(25px, 2.5vw, 35px) !important; }
    [style*="padding: 30px"] { padding: clamp(22px, 2vw, 30px) !important; }
  }

  /* Melhorias gerais para todos os tamanhos */
  [style*="line-height: 1.8"] {
    line-height: clamp(1.5, 1.8, 2) !important;
  }

  /* Garantir que imagens e ícones não quebrem o layout */
  [style*="text-shadow:"] {
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  /* Melhor handling de texto longo */
  h1, h2, h3, h4, h5, h6 {
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
  }

  p, div {
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  /* CSS específico para Challenge Numbers responsivo */
  .challenge-number {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
  }

  .challenge-number * {
    max-width: 100%;
    box-sizing: border-box;
  }

  /* Forçar responsividade em elementos inline */
  @media (max-width: 767px) {
    .challenge-number [style] {
      max-width: 100% !important;
      width: 100% !important;
    }
    
    /* Títulos nunca muito grandes */
    .challenge-number h1, 
    .challenge-number h2, 
    .challenge-number h3 {
      font-size: clamp(1.1rem, 4vw, 1.5rem) !important;
      line-height: 1.3 !important;
      margin-bottom: 0.5rem !important;
    }
    
    /* Parágrafos readáveis */
    .challenge-number p {
      font-size: clamp(0.85rem, 2.5vw, 1rem) !important;
      line-height: 1.6 !important;
    }
    
    /* Containers flexíveis */
    .challenge-number [style*="display: flex"] {
      width: 100% !important;
      flex-direction: column !important;
      align-items: center !important;
      text-align: center !important;
    }
  }



  .titulo-relatorio {
    color: purple !important;
    -webkit-text-fill-color: purple !important;
    background: none;
  }

  .text-container p {
    color: #333;
    font-size: 1.2rem;
    line-height: 1.5;
    margin: 0.5rem 0;
    display: block;
  }

  .text-container ul {
    color: #333;
    font-size: 1.2rem;
    line-height: 1.5;
    margin: 0.5rem 0;
  }

  .text-container li {
    color: #333;
    font-size: 1.2rem;
    line-height: 1.5;
    margin: 0.5rem 0;
  }

  .text-container {
    padding: 1rem;
  }

  .image-container {
    position: relative;
    width: 100vh;
    max-height: 40vh;
    display: flex;
    justify-content: center;
    align-items: center;

  }

  .relatorio-image {
    width: 100%;
    max-height: 40vh;
    object-fit: cover;
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.9));
  }

  .image-text {
    position: absolute;
    text-align: center;
    color: white;
    z-index: 2;
  }

  .main-text {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 4px;
  }

  .sub-text {
    font-size: 1.2rem;
    opacity: 0.8;
  }

  .reading-time {
    display: inline-block;
    margin-top: 6px;
    background: rgba(255, 255, 255, 0.2);
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 500;
  }

  .back-button {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 50%;
    font-size: 1.5rem;
    cursor: pointer;
    z-index: 3;
  }

  .back-button:hover {
    background: rgba(0, 0, 0, 0.8);
  }

  .title {
    padding: 1rem;
    font-size: 1.8rem;
    color: #333;
    text-align: center;
  }

  .destaque {
    font-weight: bold;
    color: #2c5545;
  }

  .conclusao {
    font-style: italic;
    background-color: #e8f0eb;
    padding: 15px;
    border-radius: 5px;
    margin-top: 25px;
  }

  .imagem-sugestao {
    text-align: center;
    margin: 20px 0;
    font-size: 1em;
    color: #666;
  }

  .intro {
    font-size: 1.1em;
    background-color: #e8f0eb;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 25px;
  }

  .pratica {
    background-color: #f0ebe8;
    padding: 15px;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .questao {
    background-color: #f5f5f5;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 5px;
  }

  .elemento {
    padding: 10px;
    margin: 15px 0;
    border-left: 4px solid;
  }

  .terra {
    border-left-color: #8B4513;
    background-color: #f5e8d6;
  }

  .agua {
    border-left-color: #1E90FF;
    background-color: #e6f2ff;
  }

  .fogo {
    border-left-color: #FF4500;
    background-color: #fff0ea;
  }

  .ar {
    border-left-color: #87CEEB;
    background-color: #f0f8ff;
  }

  .praticas {
    margin-left: 20px;
  }

  .navegacao {
    background-color: #fffef7;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    /* Garante que os botões fiquem um em cada lado */
    align-items: center;
  }

  .button-nav {
    border-radius: 8px;
    border: none;
    padding: 10px 20px;
    font-size: 1em;
    font-weight: 600;
    font-family: inherit;
    cursor: pointer;
    transition: transform 0.2s ease-in-out;
  }

  .button-nav:hover {
    transform: scale(1.05);
  }

  .proxima {
    background-color: #058f0c;
    color: white;
    margin-left: auto;
    /* Empurra o botão "Próxima" para a direita */
  }

  .voltar {
    background-color: #d32f2f;
    color: white;
    margin-right: auto;
    /* Empurra o botão "Voltar" para a esquerda */
  }

  .pagina {
    page-break-inside: avoid;
    break-inside: avoid;
    margin: 0;
    padding: 0;
  }

  /* Garante que tudo dentro da página não quebre */
  .pagina *,
  .text-container *,
  .img-relatorio,
  .relatorio-image,
  h1 h2,
  h3,
  p,
  ul,
  li {
    page-break-inside: avoid !important;
    break-inside: avoid !important;
  }

  @media print {

    body,
    element {
      -webkit-print-color-adjust: exact;
      color-adjust: exact;
    }
  }

  pre {
    max-width: 100%;
    /* Limita a largura máxima do elemento <pre> */
    white-space: pre-wrap;
  }

  .avoid-page-break {
    page-break-inside: avoid;
    /* Evita quebras de página dentro do elemento */
  }

  .icone-titulo-grande {
    width: 32px;
    height: 32px;
    margin-right: 10px;
    vertical-align: middle;
  }

  .saudacao-inicial {
    background: linear-gradient(135deg, #fef7cd 0%, #fef3c7 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #f59e0b;
  }

  .texto-empolgacao {
    font-size: 1.2em;
    color: #92400e;
    font-weight: 500;
    margin-bottom: 15px;
  }

  .metafora-cofre {
    background: white;
    padding: 20px;
    border-radius: 10px;
    font-style: italic;
    color: #374151;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .titulo-secao {
    color: #1e293b;
    font-size: 1.5em;
    margin: 30px 0 20px 0;
    display: flex;
    align-items: center;
  }

  .lista-tesouros {
    display: grid;
    gap: 20px;
    margin-bottom: 30px;
  }

  .tesouro-item {
    display: flex;
    align-items: flex-start;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    padding: 20px;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .tesouro-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .icone-tesouro {
    margin-right: 15px;
    flex-shrink: 0;
  }

  .icone-tesouro img {
    width: 24px;
    height: 24px;
  }

  .conteudo-tesouro h3 {
    color: #6b46c1;
    margin-bottom: 8px;
    font-size: 1.1em;
  }

  .conteudo-tesouro p {
    color: #475569;
    line-height: 1.6;
    margin: 0;
  }

  .empolgacao-pessoal {
    background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #ec4899;
  }

  .texto-empolgacao-detalhada {
    color: #831843;
  }

  .alerta-importante {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #3b82f6;
  }

  .titulo-alerta {
    color: #1e40af;
    font-size: 1.4em;
    margin-bottom: 15px;
  }

  .texto-jornada {
    color: #1e40af;
    font-size: 1.1em;
    margin-bottom: 15px;
  }

  .pedido-especial {
    background: white;
    padding: 20px;
    border-radius: 10px;
    border: 2px solid #3b82f6;
  }

  .pedido-especial h3 {
    color: #1e40af;
    margin-bottom: 5px;
  }

  .explicacao-pedido {
    color: #475569;
    font-style: italic;
    margin-top: 10px;
  }

  .convite-inicio {
    text-align: center;
    margin: 30px 0;
  }

  .botao-magico {
    background: linear-gradient(135deg, #6b46c1 0%, #8b5cf6 100%);
    color: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(107, 70, 193, 0.3);
  }

  .botao-magico h2 {
    margin-bottom: 15px;
    font-size: 1.5em;
  }

  .texto-suporte {
    font-size: 1em;
    opacity: 0.9;
    margin: 0;
  }

  .assinatura-inicial {
    text-align: center;
    padding: 20px;
    background: #f8fafc;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
  }

  .despedida-calorosa {
    color: #6b46c1;
    font-style: italic;
    margin-bottom: 5px;
  }

  .nome-guia {
    color: #1e293b;
    font-size: 1.1em;
    margin: 0;
  }

  @media (max-width: 768px) {
    .titulo-boas-vindas {
      font-size: 1.8em;
    }

    .icone-titulo-grande {
      width: 24px;
      height: 24px;
    }

    .tesouro-item {
      flex-direction: column;
      text-align: center;
    }

    .icone-tesouro {
      margin-right: 0;
      margin-bottom: 10px;
      align-self: center;
    }

    .saudacao-inicial,
    .empolgacao-pessoal,
    .alerta-importante {
      padding: 20px;
    }
  }

  .titulo-principal {
    text-align: center;
    color: #6b46c1;
    font-size: 2.2em;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
  }

  .introducao-historia {
    background: linear-gradient(135deg, #fef7cd 0%, #fef3c7 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #f59e0b;
  }

  .texto-abertura {
    font-size: 1.1em;
    color: #92400e;
    margin-bottom: 20px;
  }

  .metafora-arvore {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .icone-arvore {
    font-size: 2em;
    flex-shrink: 0;
  }

  .origens-antigas {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #0ea5e9;
  }

  .destaque-pitagoras {
    background: white;
    padding: 20px;
    border-radius: 12px;
    margin-top: 20px;
    border: 2px solid #0ea5e9;
  }

  .cabecalho-pitagoras {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
  }

  .icone-pitagoras {
    width: 24px;
    height: 24px;
  }

  .filosofia-pitagoras {
    background: #f8fafc;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
    font-style: italic;
    color: #475569;
  }

  .tranquilizacao {
    background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
    padding: 20px;
    border-radius: 12px;
    margin: 30px 0;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 5px solid #10b981;
  }

  .icone-tranquilidade {
    font-size: 1.5em;
    flex-shrink: 0;
  }

  .evolucao-culturas {
    margin-bottom: 30px;
  }

  .introducao-evolucao {
    font-size: 1.1em;
    color: #374151;
    margin-bottom: 25px;
    text-align: center;
    font-style: italic;
  }

  .culturas-grid {
    display: grid;
    gap: 25px;
    margin-bottom: 30px;
  }

  .cultura-item {
    padding: 20px;
    border-radius: 12px;
    border-left: 5px solid;
  }

  .cultura-item.china {
    background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
    border-left-color: #f59e0b;
  }

  .cultura-item.india {
    background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%);
    border-left-color: #ec4899;
  }

  .cultura-item.europa {
    background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
    border-left-color: #8b5cf6;
  }

  .cultura-item.moderno {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    border-left-color: #3b82f6;
  }

  .cabecalho-cultura {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
  }

  .icone-cultura {
    width: 20px;
    height: 20px;
  }

  .exemplo-cultural {
    background: rgba(255, 255, 255, 0.7);
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
  }

  .definicao-numerologia {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
  }

  .introducao-definicao {
    font-size: 1.1em;
    color: #374151;
    margin-bottom: 20px;
  }

  .metafora-novela {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 25px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .icone-teatro {
    font-size: 2em;
    flex-shrink: 0;
  }

  .personagens-numericos {
    display: grid;
    gap: 20px;
    margin-bottom: 25px;
  }

  .personagem {
    background: white;
    padding: 20px;
    border-radius: 12px;
    border: 2px solid;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .personagem:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .numero-1 {
    border-color: #ef4444;
  }

  .numero-2 {
    border-color: #f59e0b;
  }

  .numero-3 {
    border-color: #10b981;
  }

  .numero-4 {
    border-color: #3b82f6;
  }

  .cabecalho-personagem {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
  }

  .numero-destaque {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    font-weight: bold;
    color: white;
    flex-shrink: 0;
  }

  .numero-1 .numero-destaque {
    background: #ef4444;
  }

  .numero-2 .numero-destaque {
    background: #f59e0b;
  }

  .numero-3 .numero-destaque {
    background: #10b981;
  }

  .numero-4 .numero-destaque {
    background: #3b82f6;
  }

  .conclusao-numerologia {
    margin-top: 25px;
  }

  .metafora-linguagem {
    background: #f8fafc;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-top: 20px;
  }

  .icone-linguagem {
    font-size: 2em;
    flex-shrink: 0;
  }

  .convite-jornada {
    background: linear-gradient(135deg, #6b46c1 0%, #8b5cf6 100%);
    color: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(107, 70, 193, 0.3);
  }

  .texto-convite h3 {
    margin-bottom: 15px;
    font-size: 1.3em;
  }

  .texto-convite p {
    font-size: 1.1em;
    opacity: 0.9;
    margin: 0;
  }

  @media (max-width: 768px) {
    .titulo-principal {
      font-size: 1.8em;
    }

    .metafora-arvore,
    .metafora-novela,
    .metafora-linguagem {
      flex-direction: column;
      text-align: center;
    }

    .icone-arvore,
    .icone-teatro,
    .icone-linguagem {
      align-self: center;
      margin-bottom: 10px;
    }

    .cabecalho-personagem {
      flex-direction: column;
      text-align: center;
      gap: 10px;
    }

    .tranquilizacao {
      flex-direction: column;
      text-align: center;
    }

    .icone-tranquilidade {
      align-self: center;
      margin-bottom: 10px;
    }
  }

  .pagina-influencia-numeros {
    padding: 20px;
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.6;
  }

  .introducao-influencia {
    background: linear-gradient(135deg, #fef7cd 0%, #fef3c7 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #f59e0b;
    text-align: center;
  }

  .aspectos-vida {
    display: grid;
    gap: 25px;
    margin-bottom: 30px;
  }

  .aspecto-item {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-left: 5px solid;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .aspecto-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  }

  .talentos-desafios {
    border-left-color: #ef4444;
  }

  .direcao-futuro {
    border-left-color: #f59e0b;
  }

  .relacionamentos {
    border-left-color: #ec4899;
  }

  .crescimento {
    border-left-color: #10b981;
  }

  .cabecalho-aspecto {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
  }

  .icone-aspecto {
    width: 24px;
    height: 24px;
  }

  .cabecalho-aspecto h2 {
    color: #1e293b;
    font-size: 1.3em;
    margin: 0;
  }

  .numero-explicacao {
    background: #f8fafc;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 15px;
    border-left: 3px solid;
  }

  .expressao {
    border-left-color: #3b82f6;
  }

  .desafio {
    border-left-color: #ef4444;
  }

  .destino {
    border-left-color: #f59e0b;
  }

  .alma {
    border-left-color: #ec4899;
  }

  .personalidade {
    border-left-color: #8b5cf6;
  }

  .maturidade {
    border-left-color: #10b981;
  }

  .aprendizado {
    border-left-color: #06b6d4;
  }

  .numero-badge {
    background: linear-gradient(135deg, #6b46c1 0%, #8b5cf6 100%);
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .metafora-mapa {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    padding: 15px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 15px;
  }

  .icone-mapa {
    font-size: 1.5em;
    flex-shrink: 0;
  }

  .texto-metafora {
    font-style: italic;
    color: #1e40af;
    margin: 0;
  }

  .transicao-mapa {
    margin: 40px 0;
    text-align: center;
  }

  .definicao-mapa {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #0ea5e9;
  }

  .metafora-tesouro {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
  }

  .icone-tesouro-grande {
    font-size: 3em;
    flex-shrink: 0;
  }

  .componentes-mapa {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin: 20px 0;
  }

  .componente {
    background: white;
    padding: 15px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .icone-componente {
    font-size: 1.5em;
    flex-shrink: 0;
  }

  .numeros-calculados {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
  }

  .numeros-calculados h3 {
    color: #0ea5e9;
    margin-bottom: 15px;
  }

  .lista-numeros {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  .numero-item {
    background: linear-gradient(135deg, #6b46c1 0%, #8b5cf6 100%);
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9em;
    font-weight: 500;
  }

  .proposito-mapa {
    background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%);
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #ec4899;
  }

  .analogia-estradas {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 20px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .icone-estrada {
    font-size: 2em;
    flex-shrink: 0;
  }

  .revelacoes-mapa h3 {
    color: #be185d;
    margin-bottom: 20px;
  }

  .grid-revelacoes {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
  }

  .revelacao-item {
    background: white;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .revelacao-item:hover {
    transform: translateY(-2px);
  }

  .icone-revelacao {
    font-size: 1.5em;
    margin-bottom: 10px;
  }

  .revelacao-item h4 {
    color: #be185d;
    margin-bottom: 5px;
    font-size: 1em;
  }

  .revelacao-item p {
    color: #64748b;
    font-size: 0.9em;
    margin: 0;
  }

  .introducao-interpretacao {
    background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #8b5cf6;
    text-align: center;
  }

  .exemplos-interpretacao {
    display: grid;
    gap: 20px;
    margin-bottom: 30px;
  }

  .exemplo-numero {
    background: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-left: 4px solid;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .exemplo-numero:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  }

  .destino-1 {
    border-left-color: #ef4444;
  }

  .expressao-2 {
    border-left-color: #f59e0b;
  }

  .alma-5 {
    border-left-color: #10b981;
  }

  .personalidade-9 {
    border-left-color: #8b5cf6;
  }

  .aprendizado-6 {
    border-left-color: #06b6d4;
  }

  .maturidade-8 {
    border-left-color: #dc2626;
  }

  .desafio-7 {
    border-left-color: #7c3aed;
  }

  .cabecalho-exemplo {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
  }

  .numero-exemplo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    font-weight: bold;
    color: white;
    flex-shrink: 0;
  }

  .destino-1 .numero-exemplo {
    background: #ef4444;
  }

  .expressao-2 .numero-exemplo {
    background: #f59e0b;
  }

  .alma-5 .numero-exemplo {
    background: #10b981;
  }

  .personalidade-9 .numero-exemplo {
    background: #8b5cf6;
  }

  .aprendizado-6 .numero-exemplo {
    background: #06b6d4;
  }

  .maturidade-8 .numero-exemplo {
    background: #dc2626;
  }

  .desafio-7 .numero-exemplo {
    background: #7c3aed;
  }

  .cabecalho-exemplo h3 {
    color: #1e293b;
    margin: 0;
    font-size: 1.1em;
  }

  .aplicacao-pratica {
    background: #f8fafc;
    padding: 15px;
    border-radius: 8px;
    margin-top: 10px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
  }

  .icone-pratica {
    font-size: 1.2em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .convite-descoberta {
    background: linear-gradient(135deg, #6b46c1 0%, #8b5cf6 100%);
    color: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(107, 70, 193, 0.3);
  }

  .texto-convite h3 {
    margin-bottom: 15px;
    font-size: 1.3em;
  }

  .texto-convite p {
    font-size: 1.1em;
    opacity: 0.9;
    margin: 0;
  }

  @media (max-width: 768px) {
    .metafora-tesouro {
      flex-direction: column;
      text-align: center;
    }

    .icone-tesouro-grande {
      align-self: center;
    }

    .analogia-estradas {
      flex-direction: column;
      text-align: center;
    }

    .icone-estrada {
      align-self: center;
    }

    .componentes-mapa {
      grid-template-columns: 1fr;
    }

    .grid-revelacoes {
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }

    .cabecalho-exemplo {
      flex-direction: column;
      text-align: center;
      gap: 10px;
    }

    .aplicacao-pratica {
      flex-direction: column;
      text-align: center;
    }

    .icone-pratica {
      align-self: center;
      margin-top: 0;
      margin-bottom: 5px;
    }
  }

  .pagina-numeros-detalhados {
    padding: 20px;
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.6;
  }

  .introducao-numeros {
    background: linear-gradient(135deg, #fef7cd 0%, #fef3c7 100%);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #f59e0b;
    text-align: center;
  }

  .secao-numero {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-left: 5px solid;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .secao-numero:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  }

  .alma {
    border-left-color: #ec4899;
  }

  .expressao {
    border-left-color: #3b82f6;
  }

  .destino {
    border-left-color: #f59e0b;
  }

  .personalidade {
    border-left-color: #8b5cf6;
  }

  .subconsciente {
    border-left-color: #10b981;
  }

  .desafios {
    border-left-color: #ef4444;
  }

  .cabecalho-numero {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
  }

  .icone-numero-grande {
    font-size: 3em;
    flex-shrink: 0;
  }

  .titulo-numero h2 {
    color: #1e293b;
    font-size: 1.5em;
    margin-bottom: 5px;
  }

  .subtitulo {
    color: #64748b;
    font-style: italic;
    font-size: 1.1em;
    margin: 0;
  }

  .definicao {
    background: #f8fafc;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-size: 1.05em;
  }

  .aplicacao-pratica {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    padding: 20px;
    border-radius: 12px;
    margin: 20px 0;
    border-left: 4px solid #0ea5e9;
  }

  .aplicacao-pratica h3 {
    color: #0c4a6e;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .icone-aplicacao {
    font-size: 1.2em;
  }

  .exemplos-grid {
    display: grid;
    gap: 15px;
    margin: 15px 0;
  }

  .exemplo-item {
    background: white;
    padding: 15px;
    border-radius: 8px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .icone-exemplo {
    font-size: 1.3em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .conclusao-exemplo {
    background: #e0f2fe;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
    font-style: italic;
    color: #0c4a6e;
  }

  .detalhes-tecnicos {
    background: #f1f5f9;
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .icone-tecnico {
    font-size: 1.2em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .exemplos-destino {
    display: grid;
    gap: 20px;
    margin: 20px 0;
  }

  .exemplo-destino {
    background: #f8fafc;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    border-left: 4px solid;
  }

  .prestativo {
    border-left-color: #10b981;
  }

  .aventureiro {
    border-left-color: #f59e0b;
  }

  .numero-destino {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8em;
    font-weight: bold;
    color: white;
    flex-shrink: 0;
  }

  .prestativo .numero-destino {
    background: #10b981;
  }

  .aventureiro .numero-destino {
    background: #f59e0b;
  }

  .descricao-destino h4 {
    color: #1e293b;
    margin-bottom: 10px;
  }

  .reflexao-destino {
    background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
    padding: 20px;
    border-radius: 10px;
    margin: 20px 0;
    display: flex;
    align-items: flex-start;
    gap: 15px;
  }

  .icone-reflexao {
    font-size: 1.5em;
    flex-shrink: 0;
  }

  .funcao-personalidade {
    background: #f3e8ff;
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .icone-funcao {
    font-size: 1.2em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .beneficios-subconsciente {
    background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
    padding: 20px;
    border-radius: 12px;
    margin: 20px 0;
  }

  .beneficios-subconsciente h3 {
    color: #065f46;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .icone-beneficio {
    font-size: 1.2em;
  }

  .metafora-reserva {
    background: #f0fdf4;
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    border-left: 3px solid #10b981;
  }

  .icone-metafora {
    font-size: 1.2em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .proposito-desafios {
    background: #fef2f2;
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    border-left: 3px solid #ef4444;
  }

  .icone-proposito {
    font-size: 1.2em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .fases-desafios h3 {
    color: #dc2626;
    margin: 25px 0 20px 0;
  }

  .grid-fases {
    display: grid;
    gap: 20px;
  }

  .fase-item {
    background: #f8fafc;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 20px;
    border-left: 4px solid;
  }

  .primeiro {
    border-left-color: #3b82f6;
  }

  .segundo {
    border-left-color: #10b981;
  }

  .terceiro {
    border-left-color: #f59e0b;
  }

  .quarto {
    border-left-color: #8b5cf6;
  }

  .numero-fase {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2em;
    font-weight: bold;
    color: white;
    flex-shrink: 0;
  }

  .primeiro .numero-fase {
    background: #3b82f6;
  }

  .segundo .numero-fase {
    background: #10b981;
  }

  .terceiro .numero-fase {
    background: #f59e0b;
  }

  .quarto .numero-fase {
    background: #8b5cf6;
  }

  .conteudo-fase h4 {
    color: #1e293b;
    margin-bottom: 8px;
    font-size: 1.1em;
  }

  .conteudo-fase p {
    color: #475569;
    margin: 0;
    line-height: 1.5;
  }

  .utilizacao-desafios {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    padding: 25px;
    border-radius: 12px;
    margin-top: 25px;
  }

  .utilizacao-desafios h3 {
    color: #1e40af;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .icone-utilizacao {
    font-size: 1.2em;
  }

  .convite-aventura {
    background: white;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
    text-align: center;
    border: 2px solid #3b82f6;
  }

  .calculo-metodo {
    background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    border-left: 3px solid #64748b;
  }

  .cabecalho-calculo {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 12px;
  }

  .cabecalho-calculo h4 {
    color: #334155;
    margin: 0;
  }

  .icone-calculo {
    font-size: 1.1em;
  }

  .secao-calculos {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    padding: 30px;
    border-radius: 15px;
    margin: 30px 0;
    border-left: 5px solid #64748b;
  }

  .cabecalho-calculos {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
  }

  .introducao-calculos {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 25px;
    font-size: 1.05em;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .metodos-calculo {
    display: grid;
    gap: 20px;
  }

  .metodo-item {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-left: 4px solid;
  }

  .maturidade {
    border-left-color: #8b5cf6;
  }

  .personalizacao {
    border-left-color: #f59e0b;
  }

  .cabecalho-metodo {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
  }

  .icone-metodo {
    font-size: 1.3em;
  }

  .cabecalho-metodo h3 {
    color: #1e293b;
    margin: 0;
    font-size: 1.2em;
  }

  .destaque-maturidade {
    background: #f3e8ff;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
    font-style: italic;
    color: #6b21a8;
  }

  .beneficios-personalizacao {
    background: #fef3c7;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .transicao-final {
    margin: 40px 0;
    text-align: center;
  }

  @media (max-width: 768px) {
    .cabecalho-numero {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .icone-numero-grande {
      align-self: center;
    }

    .exemplos-destino .exemplo-destino {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .numero-destino {
      align-self: center;
    }

    .grid-fases .fase-item {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .numero-fase {
      align-self: center;
    }

    .cabecalho-calculos {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .icone-numero-grande {
      align-self: center;
    }
  }

  .pagina-encerramento-numerologia {
    padding: 20px;
    max-width: 900px;
    margin: 0 auto;
    line-height: 1.6;
  }

  .reforco-importancia {
    background: linear-gradient(135deg, #fef7cd 0%, #fef3c7 100%);
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #f59e0b;
  }

  .cabecalho-reforco {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
  }

  .icone-reforco-grande {
    font-size: 3em;
    flex-shrink: 0;
  }

  .titulo-reforco h2 {
    color: #92400e;
    font-size: 1.5em;
    margin-bottom: 5px;
  }

  .subtitulo-reforco {
    color: #a16207;
    font-style: italic;
    font-size: 1.1em;
    margin: 0;
  }

  .definicao-numeros {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 25px;
    font-size: 1.05em;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .aplicacoes-praticas h3 {
    color: #92400e;
    margin-bottom: 20px;
  }

  .grid-aplicacoes {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin-bottom: 20px;
  }

  .aplicacao-item {
    background: white;
    padding: 15px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .aplicacao-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  .icone-aplicacao {
    font-size: 1.3em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .conteudo-aplicacao h4 {
    color: #1e293b;
    margin-bottom: 5px;
    font-size: 1em;
  }

  .conteudo-aplicacao p {
    color: #64748b;
    font-size: 0.9em;
    margin: 0;
    line-height: 1.4;
  }

  .acumulo-energias {
    background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    border-left: 4px solid #f59e0b;
  }

  .icone-acumulo {
    font-size: 1.5em;
    flex-shrink: 0;
  }

  .texto-acumulo {
    color: #92400e;
    font-weight: 500;
    margin: 0;
  }

  .mensagem-final {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #0ea5e9;
  }

  .cabecalho-mensagem {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
  }

  .icone-mensagem-grande {
    font-size: 3em;
    flex-shrink: 0;
  }

  .titulo-mensagem h2 {
    color: #0c4a6e;
    font-size: 1.5em;
    margin-bottom: 5px;
  }

  .subtitulo-mensagem {
    color: #0369a1;
    font-style: italic;
    font-size: 1.1em;
    margin: 0;
  }

  .ferramenta-poderosa {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .icone-ferramenta {
    font-size: 1.5em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .texto-ferramenta {
    font-size: 1.05em;
  }

  .crenca-poder {
    margin: 20px 0;
  }

  .background-crenca {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
  }

  .icone-crenca {
    font-size: 1.5em;
    flex-shrink: 0;
  }

  .texto-crenca h3 {
    color: #1e40af;
    margin-bottom: 10px;
  }

  .texto-crenca p {
    color: #1e40af;
    margin: 0;
  }

  .caminho-prosperidade {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .icone-caminho {
    font-size: 1.5em;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .texto-caminho {
    font-size: 1.05em;
    color: #374151;
    margin: 0;
  }

  .apoio-jornada {
    background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%);
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    border-left: 5px solid #ec4899;
  }

  .conteudo-apoio {
    display: flex;
    align-items: flex-start;
    gap: 20px;
  }

  .icone-apoio-grande {
    font-size: 3em;
    flex-shrink: 0;
  }

  .texto-apoio h3 {
    color: #be185d;
    margin-bottom: 15px;
  }

  .texto-apoio>p {
    color: #be185d;
    margin-bottom: 20px;
  }

  .orientacoes-finais {
    display: grid;
    gap: 12px;
  }

  .orientacao-item {
    background: white;
    padding: 12px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .icone-orientacao {
    font-size: 1.2em;
    flex-shrink: 0;
  }

  .orientacao-item p {
    color: #374151;
    margin: 0;
    font-size: 0.95em;
  }

  .despedida-final {
    margin-bottom: 30px;
  }

  .background-despedida {
    background: linear-gradient(135deg, #6b46c1 0%, #8b5cf6 100%);
    color: white;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(107, 70, 193, 0.3);
  }

  .icone-despedida {
    font-size: 2em;
    margin-bottom: 10px;
  }

  .background-despedida h3 {
    margin-bottom: 15px;
    font-size: 1.4em;
  }

  .frase-sorte {
    font-size: 1.1em;
    margin-bottom: 25px;
    opacity: 0.95;
  }

  .assinatura-mahila {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 20px;
    backdrop-filter: blur(10px);
  }

  .foto-mahila {
    flex-shrink: 0;
  }

  .img-mahila {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 3px solid white;
  }

  .info-mahila {
    text-align: left;
  }

  .nome-mahila {
    font-size: 1.2em;
    margin-bottom: 5px;
  }

  .titulo-mahila {
    font-size: 0.9em;
    opacity: 0.9;
    margin-bottom: 5px;
  }

  .frase-mahila {
    font-size: 0.85em;
    font-style: italic;
    opacity: 0.8;
    margin: 0;
  }

  .convite-continuidade {
    margin-bottom: 30px;
  }

  .background-convite {
    background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    border-left: 5px solid #8b5cf6;
  }

  .background-convite h3 {
    color: #6b21a8;
    margin-bottom: 15px;
  }

  .background-convite>p {
    color: #6b21a8;
    margin-bottom: 20px;
  }

  .proximos-passos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin-bottom: 20px;
  }

  .passo-item {
    background: white;
    padding: 15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .icone-passo {
    font-size: 1.2em;
    flex-shrink: 0;
  }

  .passo-item p {
    color: #374151;
    margin: 0;
    font-size: 0.9em;
  }

  .servicos-especiais h4 {
    color: #6b21a8;
    margin-bottom: 15px;
  }

  .lista-servicos {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
  }

  .servico-tag {
    background: white;
    color: #6b21a8;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9em;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .servico-tag:hover {
    transform: translateY(-2px);
  }

  .gratidao-final {
    background: #f8fafc;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    border: 1px solid #e2e8f0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .icone-gratidao {
    font-size: 1.5em;
  }

  .gratidao-final p {
    color: #64748b;
    margin: 0;
    max-width: 600px;
  }

  @media (max-width: 768px) {

    .cabecalho-reforco,
    .cabecalho-mensagem {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .icone-reforco-grande,
    .icone-mensagem-grande {
      align-self: center;
    }

    .conteudo-apoio {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .icone-apoio-grande {
      align-self: center;
    }

    .assinatura-mahila {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .info-mahila {
      text-align: center;
    }

    .grid-aplicacoes {
      grid-template-columns: 1fr;
    }

    .proximos-passos {
      grid-template-columns: 1fr;
    }

    .lista-servicos {
      flex-direction: column;
      align-items: center;
    }
  }
  
  @media (max-width: 480px) {
    .progress-container {
      padding: 0.5rem 0;
    }

    .progress-spacer {
      height: 60px; /* Altura ainda menor para dispositivos muito pequenos */
    }
  }

  @media (max-width: 768px) {
    .progress-container {
      padding: 0.75rem 0;
    }
    
    .astro-progress-bar {
      width: 100%;
      height: 6px;
    }
    
    .progress-info {
      width: 100%;
    }
    
    .progress-text,
    .progress-percentage {
      font-size: 0.8rem;
    }

    .progress-spacer {
      height: 70px; /* Altura menor para mobile */
    }
  }

  .progress-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 0.75rem 0;
  }

  .progress-spacer {
    height: 80px; /* Altura para compensar a progress-container fixa */
    width: 100%;
  }

  .astro-progress-bar {
    width: 100%;
    height: 8px;
    background: linear-gradient(90deg, #e5e7eb 0%, #f3f4f6 100%);
    border-radius: 0;
    margin: 0 0 0.5rem 0;
    overflow: hidden;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .astro-progress-fill {
    height: 100%;
    background: linear-gradient(90deg, #8b5cf6 0%, #a78bfa 50%, #c084fc 100%);
    border-radius: 10px;
    transition: width 0.3s ease-out;
    position: relative;
    overflow: hidden;
  }

  .astro-progress-fill.complete {
    background: linear-gradient(90deg, #10b981 0%, #34d399 50%, #6ee7b7 100%);
  }

  .astro-progress-fill::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.1) 100%);
    opacity: 0.3;
    /* Removida a animação para evitar loop visual */
  }

  .progress-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 800px;
    margin: 0 auto;
    font-family: 'Sora', sans-serif;
  }

  .progress-text {
    color: #6b7280;
    font-weight: 600;
    font-size: 0.9rem;
  }

  .progress-percentage {
    color: #8b5cf6;
    font-weight: 700;
    font-size: 0.9rem;
  }

  /* ESTILOS ESPECÍFICOS PARA PDF */
  #conteudo-para-pdf, 
  #texto-para-pdf,
  .pagina {
    background-color: white !important;
    color: black !important;
    font-family: Arial, sans-serif !important;
    line-height: 1.6 !important;
    -webkit-print-color-adjust: exact !important;
    print-color-adjust: exact !important;
  }

  .pagina {
    width: 210mm !important;
    min-height: 297mm !important;
    padding: 20mm !important;
    margin: 0 !important;
    page-break-after: always !important;
    box-sizing: border-box !important;
  }

  .pagina img {
    max-width: 100% !important;
    height: auto !important;
    display: block !important;
    margin: 10px auto !important;
  }

  .pagina h1, .pagina h2, .pagina h3, .pagina h4 {
    color: black !important;
    margin: 1em 0 0.5em 0 !important;
    page-break-after: avoid !important;
  }

  .pagina p {
    color: black !important;
    margin: 0.5em 0 !important;
    orphans: 3 !important;
    widows: 3 !important;
  }

  /* Remove elementos que podem causar problemas no PDF */
  .pagina video,
  .pagina iframe,
  .pagina canvas,
  .pagina .progress-container,
  .pagina .progress-spacer {
    display: none !important;
  }

  /* Estilos para elementos específicos do relatório */
  .pagina .titulo-boas-vindas,
  .pagina .titulo-secao {
    font-size: 18px !important;
    font-weight: bold !important;
    color: #333 !important;
    text-align: center !important;
    margin: 1.5em 0 1em 0 !important;
  }

  .pagina .saudacao-inicial,
  .pagina .metafora-cofre {
    font-size: 14px !important;
    color: #444 !important;
    margin: 1em 0 !important;
    padding: 10px !important;
    border-left: 3px solid #8b5cf6 !important;
    background-color: #f9f9f9 !important;
  }

  /* Soul Content Styles */
  .soul-content-container {
    padding: 25px;
    margin: 20px 0;
    border-radius: 15px;
    background: linear-gradient(135deg, #f8f9ff 0%, #e8efff 100%);
    border-left: 5px solid #6366f1;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }

  .soul-header {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 20px;
  }

  .soul-icon {
    font-size: 3em;
    flex-shrink: 0;
  }

  .soul-header-text {
    flex: 1;
  }

  .soul-title {
    color: #3730a3;
    font-size: 1.5em;
    margin-bottom: 5px;
    margin-top: 0;
    font-weight: bold;
  }

  .soul-subtitle {
    color: #4338ca;
    font-style: italic;
    font-size: 1.1em;
    margin: 0;
  }

  .soul-description {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  .soul-description p {
    font-size: 1.05em;
    line-height: 1.6;
    color: #374151;
    margin: 0;
  }

  /* Expression Number Styles */
  .expression-content-container {
    padding: 25px;
    margin: 20px 0;
    border-radius: 15px;
    background: linear-gradient(135deg, #fff8f0 0%, #ffedd5 100%);
    border-left: 5px solid #f59e0b;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }

  .expression-header {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 20px;
  }

  .expression-icon {
    font-size: 3em;
    flex-shrink: 0;
  }

  .expression-header-text {
    flex: 1;
  }

  .expression-title {
    color: #d97706;
    font-size: 1.5em;
    margin-bottom: 5px;
    margin-top: 0;
    font-weight: bold;
  }

  .expression-subtitle {
    color: #ea580c;
    font-style: italic;
    font-size: 1.1em;
    margin: 0;
  }

  .expression-description {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  .expression-description p {
    font-size: 1.05em;
    line-height: 1.6;
    color: #374151;
    margin: 0;
  }

</style>
<template>
  <div class="relatorio-container w-full bg-grey min-h-screen flex flex-col items-center overflow-x-hidden">
    <div class="progress-container">
      <div class="astro-progress-bar">
        <div class="astro-progress-fill" 
             :class="{ complete: progressPercentage >= 100 }" 
             :style="{ width: progressPercentage + '%' }">
        </div>
      </div>
      <div class="progress-info">
        <span class="progress-text">{{ pagina }}/{{ totalPaginas }}</span>
        <span class="progress-percentage">{{ Math.round(progressPercentage) }}%</span>
      </div>
    </div>
    <!-- Espaçamento para compensar a progress-container fixed -->
    <div class="progress-spacer"></div>
    <div class="w-full max-w-3xl px-4 mt-6" v-if="pagina == 1">
      <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded shadow">
        <p class="font-semibold mb-2">O seu relatório está a caminho do seu e-mail! Mas já pode visualizá-lo nesta página:</p>
        <p>Receberá um e-mail em breve. Caso não receba dentro de alguns minutos, não se preocupe.</p>
        <p>Envie uma mensagem com o seu <strong>Nome Completo</strong>, o <strong>e-mail utilizado na compra</strong> e explique o que está a acontecer para que possamos ajudar.</p>
        <p class="mt-2"><strong>Apoio ao cliente:</strong> <a href="mailto:suporte@codigosdaalma.online"
            class="underline">suporte@codigosdaalma.online</a></p>
      </div>

      <!-- Banner de Acesso aos Bónus Oficiais -->
      <div style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 2px solid #d4af37; border-radius: 12px; padding: 20px; text-align: center; margin-top: 15px; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);">
        <h3 style="color: #f5d77f; font-size: 1.25rem; font-weight: 700; margin-bottom: 8px;">🎁 OS SEUS 3 LIVROS BÓNUS OFICIAIS ESTÃO DISPONÍVEIS!</h3>
        <p style="color: #e2e8f0; font-size: 0.95rem; margin-bottom: 14px;">Aceda agora ao <b>Dossiê dos Trânsitos Proibidos</b>, ao <b>Escudo do Sol Cabalístico</b> e ao <b>Ritual da Mão Esquerda</b>:</p>
        <a href="https://drive.google.com/drive/folders/1hUkkNHoQ9EBl0ZnZd58dGmeEo1uaXx3C?usp=sharing" target="_blank" rel="noopener noreferrer" style="display: inline-block; background: #28a745; color: #ffffff; padding: 12px 24px; border-radius: 8px; font-weight: bold; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 10px rgba(40,167,69,0.3);">
          📥 ACEDER E DESCARREGAR OS BÓNUS
        </a>
      </div>
    </div>
    <div class="w-full max-w-3xl py-8 bg-white" id="conteudo-para-pdf" ref="conteudoPdf">
      <div class="text-container" id="texto-para-pdf" ref="textoPdfTodo">
        <div v-if="pagina == 1" ref="textoPdf1">
          <img class="img-relatorio" src="../assets/capa/capa_mapa_numerologico.jpg">

          <h1 class="titulo-boas-vindas">
            SEJA BEM-VINDO(A) À SUA JORNADA CÓSMICA! ✨
          </h1>

          <div class="saudacao-inicial">
            <p class="texto-empolgacao">Olá, alma bela! Que alegria imensa ter você aqui, pronto para iniciar essa
              jornada fascinante de autodescoberta. Estou tão empolgada quanto você! 🌟</p>

            <div class="metafora-cofre">
              É como se estivéssemos prestes a abrir um cofre sagrado que guarda os segredos mais preciosos da sua
              existência. Este Mapa Numerológico vai muito além de simples números e palavras — ele atua como uma
              bússola divina, orientando você pelos altos e baixos da sua trajetória terrena.
            </div>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/tesouros_descoberta.png" alt="Tesouros da Descoberta">
          </div>

          <h2 class="titulo-secao">
            OS TESOUROS QUE VOCÊ ENCONTRARÁ
          </h2>

          <div class="lista-tesouros">
            <div class="tesouro-item">
              <div class="conteudo-tesouro">
                <h3>💎 Reconhecer Seus Pontos Fortes</h3>
                <p>Como um reflexo cristalino que revela sua verdadeira essência, destacando seus talentos e habilidades
                  únicos que fazem de você um ser extraordinário.</p>
              </div>
            </div>

            <div class="tesouro-item">
              <div class="conteudo-tesouro">
                <h3>🔍 Compreender Sua Fase Atual</h3>
                <p>Uma lente mágica que focaliza sua situação presente e revela exatamente o que é necessário para seu
                  desenvolvimento e evolução espiritual.</p>
              </div>
            </div>

            <div class="tesouro-item">
              <div class="conteudo-tesouro">
                <h3>🗺️ Aproveitar Melhor as Oportunidades</h3>
                <p>Um roteiro celestial que mostra os caminhos dourados disponíveis à sua frente, auxiliando você a
                  identificar e aproveitar as oportunidades que o universo preparou especialmente para você.</p>
              </div>
            </div>

            <div class="tesouro-item">
              <div class="conteudo-tesouro">
                <h3>🗝️ Superar Bloqueios e Desafios</h3>
                <p>Juntos, identificaremos os obstáculos no seu caminho e os transformaremos em degraus dourados para o
                  seu crescimento e ascensão espiritual.</p>
              </div>
            </div>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/empolgacao_criacao.png" alt="Empolgação na Criação">
          </div>

          <div class="empolgacao-pessoal">
            <h2 class="titulo-secao">
              MINHA EMPOLGAÇÃO EM CRIAR SEU GUIA
            </h2>

            <div class="texto-empolgacao-detalhada">
              <p>Antes de avançarmos, preciso compartilhar minha empolgação: <strong>adorei criar o seu guia!</strong>
                Cada número e símbolo neste guia é como uma estrela no céu — juntos, eles contam a sua história única e
                preciosa.</p>

              <div class="citacao">
                "Ao analisar cada detalhe da sua essência numerológica, descobri o quão especial e extraordinário você
                é. Cada elemento revelou algo novo e surpreendente sobre sua alma, e mal posso esperar para compartilhar
                todos esses tesouros com você!"
              </div>
            </div>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/atencao_importante.png" alt="Atenção Importante">
          </div>

          <div class="alerta-importante">
            <h2 class="titulo-alerta">
              ⚠️ PRESTE ATENÇÃO, POIS VEM ALGO IMPORTANTE
            </h2>

            <div class="conteudo-alerta">
              <p class="texto-jornada">Sua jornada de autodescoberta está prestes a começar, e tenho um pedido especial
                para você:</p>

              <div class="pedido-especial">
                <h3>🌟 Dedique-se ao Próximo Capítulo</h3>
                <p><strong>(Descubra o Poder da Numerologia)</strong></p>
                <p class="explicacao-pedido">Este é o primeiro passo sagrado para um universo novo e fascinante que está
                  por vir. Cada palavra foi cuidadosamente escolhida para despertar sua consciência numerológica.</p>
              </div>
            </div>
          </div>

          <div class="convite-inicio">
            <div class="botao-magico">
              <h2>🚀 VAMOS COMEÇAR ESTA AVENTURA CÓSMICA!</h2>
              <p class="texto-suporte">Se tiver qualquer dúvida durante esta jornada transformadora, não hesite em me
                chamar! Estou aqui para guiá-lo em cada passo desta descoberta extraordinária.</p>
            </div>
          </div>

          <div class="assinatura-inicial">
            <p class="despedida-calorosa">Com muito amor e luz cósmica ✨</p>
            <p class="nome-guia"><strong>Sua Guia Numerológica</strong></p>
          </div>
        </div>

        <div v-if="pagina == 2" ref="textoPdf2">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/historia_numerologia.png" alt="História da Numerologia">
          </div>

          <h1 class="titulo-principal">
            A BREVE HISTÓRIA DA NUMEROLOGIA ✨
          </h1>

          <div class="introducao-historia">
            <p class="texto-abertura">Antes de mergulharmos em cada aspecto sagrado da sua vida, é importante entender
              mais sobre a Numerologia — uma arte antiga e fascinante que nos ajuda a compreender melhor a nós mesmos e
              o mundo mágico ao nosso redor.</p>

            <div class="metafora-arvore">
              <div class="icone-arvore">🌳</div>
              <p>A Numerologia tem raízes profundas e ancestrais. Como uma árvore robusta e bela, ela cresceu e se
                desenvolveu ao longo de milhares de anos, absorvendo a sabedoria de civilizações inteiras. Para
                realmente entender a Numerologia, precisamos olhar para suas origens sagradas.</p>
            </div>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/babilonia_egito.png" alt="Babilônia e Egito Antigos">
          </div>

          <h2 class="titulo-secao">
            🏺 AS ORIGENS ANCESTRAIS
          </h2>

          <div class="origens-antigas">
            <p>Acredita-se que a Numerologia tenha surgido nas civilizações majestosas da antiga Babilônia e do Egito,
              há mais de <strong>10.000 anos</strong>. Imagine os sábios antigos, sob o céu estrelado do deserto,
              descobrindo que os números carregavam segredos cósmicos!</p>

            <div class="destaque-pitagoras">
              <div class="cabecalho-pitagoras">
                <img src="../assets/img/filosofo.png" alt="Filósofo" class="icone-pitagoras">
                <h3>🧙‍♂️ PITÁGORAS: O PAI DA NUMEROLOGIA MODERNA</h3>
              </div>

              <p>No entanto, foi o filósofo grego Pitágoras, por volta do século VI a.C., quem é considerado o
                verdadeiro pai da Numerologia moderna. Pitágoras não era apenas um matemático genial, famoso pelo
                Teorema de Pitágoras, mas também um místico profundo.</p>

              <div class="citacao">
                "Ele acreditava que os números eram mais do que simples formas de contar ou medir — eles tinham um
                significado profundo e espiritual, como chaves que abrem as portas dos mistérios do universo."
              </div>

              <div class="filosofia-pitagoras">
                <p>Pitágoras acreditava que todo o universo poderia ser expresso através de números, e que estes
                  poderiam revelar a harmonia e as vibrações do cosmos. É como se cada número fosse uma nota musical
                  sagrada, e juntos, formassem uma sinfonia celestial que nos ajuda a entender melhor o mundo ao nosso
                  redor.</p>
              </div>
            </div>
          </div>

          <div class="tranquilizacao">
            <div class="icone-tranquilidade">😊</div>
            <p>Talvez você pense: <em>"Isso parece um pouco complicado, não é?"</em> Mas não se preocupe! Vamos
              descobrir juntos como tudo isso funciona de forma simples e encantadora. Vamos explorar o fascinante mundo
              da Numerologia e ver o que os números têm a nos revelar sobre sua alma única.</p>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/evolucao_culturas.png" alt="Evolução através das Culturas">
          </div>

          <h2 class="titulo-secao">
            🌍 A EVOLUÇÃO DA NUMEROLOGIA AO LONGO DOS SÉCULOS
          </h2>

          <div class="evolucao-culturas">
            <p class="introducao-evolucao">A Numerologia evoluiu e se adaptou como um rio sagrado, fluindo através de
              diferentes culturas e períodos de tempo, desde os ensinamentos pitagóricos até as práticas modernas que
              conhecemos hoje.</p>

            <div class="culturas-grid">
              <div class="cultura-item china">
                <div class="cabecalho-cultura">
                  <h3>🏮 CHINA: A SABEDORIA ORIENTAL</h3>
                </div>
                <p>Na China milenar, os números sempre foram uma parte integral da cultura e do cotidiano. O número
                  <strong>8</strong>, que soa como a palavra para prosperidade em chinês, é considerado extremamente
                  favorável — um verdadeiro ímã de abundância!</p>
                <div class="exemplo-cultural">
                  <p>Muitas pessoas procuram incluir o número 8 em endereços, números de telefone e até mesmo em datas
                    de casamento. Por outro lado, o número <strong>4</strong>, que soa como a palavra para morte, é
                    frequentemente evitado como se fosse um fantasma numérico.</p>
                </div>
              </div>

              <div class="cultura-item india">
                <div class="cabecalho-cultura">
                  <h3>🕉️ ÍNDIA: A PROFUNDIDADE VÉDICA</h3>
                </div>
                <p>Na Índia espiritual, a Numerologia é amplamente influenciada pelo sistema sagrado chamado
                  <strong>"Jyotish"</strong> ou astrologia védica, que atribui significados profundos e complexos aos
                  números.</p>
                <div class="exemplo-cultural">
                  <p>Por exemplo, o número <strong>1</strong> está associado ao Sol radiante, simbolizando liderança e
                    individualidade, enquanto o número <strong>2</strong> está associado à Lua misteriosa, representando
                    emoção e dualidade.</p>
                </div>
              </div>

              <div class="cultura-item europa">
                <div class="cabecalho-cultura">
                  <h3>🏰 EUROPA MEDIEVAL: TEMPOS DE TRANSFORMAÇÃO</h3>
                </div>
                <p>Durante a Idade Média na Europa, a Numerologia era frequentemente utilizada em conjunto com outras
                  formas de adivinhação e espiritualidade, como uma tapeçaria mística tecida com fios dourados de
                  sabedoria.</p>
                <div class="exemplo-cultural">
                  <p>No entanto, com o advento do Iluminismo e a ênfase crescente na razão sobre a fé, a Numerologia foi
                    vista por muitos como superstição e perdeu popularidade — mas como uma fênix, ela ressurgiria mais
                    forte!</p>
                </div>
              </div>

              <div class="cultura-item moderno">
                <div class="cabecalho-cultura">
                  <h3>⭐ SÉCULO XX: O RENASCIMENTO MODERNO</h3>
                </div>
                <p>No século XX, a Numerologia ganhou novo fôlego e brilho, principalmente por meio do trabalho dedicado
                  de numerólogos visionários como <strong>Dr. Julia Seton</strong>, <strong>Florence Campbell</strong> e
                  <strong>Juno Jordan</strong>.</p>
                <div class="exemplo-cultural">
                  <p>Eles desenvolveram novas formas de interpretar os números e integraram a Numerologia em um quadro
                    mais amplo de desenvolvimento pessoal e autoconhecimento — transformando-a na ferramenta poderosa
                    que conhecemos hoje!</p>
                </div>
              </div>
            </div>
          </div>

          <h2 class="titulo-secao">
            🔮 O QUE É A NUMEROLOGIA?
          </h2>

          <div class="definicao-numerologia">
            <p class="introducao-definicao">A Numerologia é uma ciência e arte ancestral que estuda a influência mágica
              dos números em nossa vida. Mas como isso funciona na prática? Vamos usar alguns exemplos encantadores para
              ilustrar!</p>

            <div class="metafora-novela">
              <div class="icone-teatro">🎭</div>
              <p>Imagine que cada número é como um personagem fascinante em uma novela cósmica, cada um com sua própria
                personalidade única e energia vibrante. Vamos conhecer alguns destes personagens numerológicos:</p>
            </div>

            <div class="personagens-numericos">
              <div class="personagem numero-1">
                <div class="cabecalho-personagem">
                  <div class="numero-destaque">1</div>
                  <h3>👑 O HERÓI DA HISTÓRIA</h3>
                </div>
                <p>O número <strong>1</strong> é como o herói corajoso da história: independente, forte e determinado.
                  Ele representa liderança natural, ambição ardente e originalidade única. É o pioneiro que abre
                  caminhos!</p>
              </div>

              <div class="personagem numero-2">
                <div class="cabecalho-personagem">
                  <div class="numero-destaque">2</div>
                  <h3>🤝 O MELHOR AMIGO LEAL</h3>
                </div>
                <p>O número <strong>2</strong>, por outro lado, é como o melhor amigo do herói: gentil, harmonioso e
                  profundamente compreensivo. Ele é o pacificador sábio que traz equilíbrio e cooperação para todas as
                  situações.</p>
              </div>

              <div class="personagem numero-3">
                <div class="cabecalho-personagem">
                  <div class="numero-destaque">3</div>
                  <h3>✨ O ENCANTADOR CRIATIVO</h3>
                </div>
                <p>O número <strong>3</strong> é como o encantador carismático da história: sociável, criativo e cheio
                  de energia vibrante. Ele é um comunicador nato, sempre pronto para se expressar e compartilhar suas
                  ideias brilhantes.</p>
              </div>

              <div class="personagem numero-4">
                <div class="cabecalho-personagem">
                  <div class="numero-destaque">4</div>
                  <h3>🔨 O TRABALHADOR DEDICADO</h3>
                </div>
                <p>E o número <strong>4</strong> é o trabalhador incansável e dedicado: sempre confiável e prático. Ele
                  representa estabilidade sólida, ordem perfeita e pragmatismo eficiente — a base sobre a qual tudo se
                  constrói.</p>
              </div>
            </div>

            <div class="conclusao-numerologia">
              <div class="intro">
                A Numerologia nos ajuda a entender a energia única e poderosa de cada número e como ela influencia nossa
                vida de forma mágica. Cada número tem seu próprio papel sagrado a desempenhar em nossa jornada terrena.
              </div>

              <div class="metafora-linguagem">
                <div class="icone-linguagem">📚</div>
                <p>Além disso, a Numerologia nos ajuda a entender as relações místicas entre os números — é como
                  aprender uma nova linguagem celestial, onde os números são as palavras sagradas e suas combinações
                  criam frases e sentenças cheias de significado profundo e transformador.</p>
              </div>
            </div>
          </div>

          <div class="convite-jornada">
            <div class="texto-convite">
              <h3>🌟 Agora que você conhece as origens sagradas desta arte milenar...</h3>
              <p>Está pronto para descobrir como esses números ancestrais se manifestam especificamente na sua vida
                única e preciosa? Vamos juntos desvendar os segredos numerológicos da sua alma!</p>
            </div>
          </div>
        </div>

        <div v-if="pagina == 3" ref="textoPdf3">
          <div class="image-placeholder">
              <img class="img-relatorio" src="../assets/img/influencia_numeros.png"
                alt="Como os Números Influenciam a Vida">

            <h1 class="titulo-principal">
              COMO OS NÚMEROS INFLUENCIAM A VIDA DAS PESSOAS ✨
            </h1>
          </div>

          <div class="introducao-influencia">
            <p class="texto-abertura">Vamos explorar como cada um dos números sagrados da Numerologia se relaciona com
              diferentes aspectos mágicos da vida, criando uma sinfonia única de possibilidades e descobertas!</p>
          </div>
          <div class="aspectos-vida">
            <div class="aspecto-item talentos-desafios">
              <div class="cabecalho-aspecto">
                <h2>💎 ENTENDENDO NOSSOS TALENTOS E DESAFIOS</h2>
              </div>
              <div class="conteudo-aspecto">
                <div class="numero-explicacao expressao">
                  <div class="numero-badge">EXPRESSÃO</div>
                  <p>O <strong>Número de Expressão</strong>, calculado a partir das letras do seu nome completo, revela
                    seus talentos naturais, habilidades únicas e características pessoais que fazem de você um ser
                    extraordinário.</p>
                </div>

                <div class="numero-explicacao desafio">
                  <div class="numero-badge">DESAFIO</div>
                  <p>O <strong>Número de Desafio</strong> mostra os obstáculos sagrados que você precisa superar e as
                    lições preciosas que deve aprender para evoluir espiritualmente.</p>
                </div>
              </div>
            </div>

            <div class="aspecto-item direcao-futuro">
              <div class="cabecalho-aspecto">
                <h2>🧭 DIREÇÃO PARA O FUTURO</h2>
              </div>
              <div class="conteudo-aspecto">
                <div class="numero-explicacao destino">
                  <div class="numero-badge">DESTINO</div>
                  <p>O <strong>Número do Destino</strong>, calculado a partir da sua data de nascimento sagrada, é como
                    um mapa rodoviário celestial da vida, indicando as principais lições, oportunidades douradas e
                    desafios transformadores que você provavelmente encontrará.</p>
                </div>

                <div class="metafora-mapa">
                  <div class="icone-mapa">🗺️</div>
                  <p class="texto-metafora">Imagine ter um GPS cósmico que não apenas mostra onde você está, mas revela
                    o caminho mais significativo para sua realização pessoal!</p>
                </div>
              </div>
            </div>

            <div class="aspecto-item relacionamentos">
              <div class="cabecalho-aspecto">
                <h2>💕 RELACIONAMENTOS E COMPATIBILIDADE</h2>
              </div>
              <div class="conteudo-aspecto">
                <div class="numero-explicacao alma">
                  <div class="numero-badge">ALMA</div>
                  <p>O <strong>Número da Alma</strong>, calculado a partir das vogais do seu nome completo, mostra o que
                    você realmente deseja em um relacionamento e o que faz sua alma vibrar de realização.</p>
                </div>

                <div class="numero-explicacao personalidade">
                  <div class="numero-badge">PERSONALIDADE</div>
                  <p>O <strong>Número de Personalidade</strong>, calculado a partir das consoantes do seu nome completo,
                    revela como você é percebido pelos outros — sua aura externa que pode afetar magicamente a dinâmica
                    dos relacionamentos.</p>
                </div>
              </div>
            </div>

            <div class="aspecto-item crescimento">
              <div class="cabecalho-aspecto">
                <h2>🌱 CRESCIMENTO PESSOAL E ESPIRITUAL</h2>
              </div>
              <div class="conteudo-aspecto">
                <div class="numero-explicacao maturidade">
                  <div class="numero-badge">MATURIDADE</div>
                  <p>O <strong>Número da Maturidade</strong>, calculado somando o Número do Destino e o Número de
                    Expressão, indica o potencial divino para crescimento pessoal e cumprimento do seu propósito sagrado
                    na vida, geralmente florescendo a partir dos 40 anos.</p>
                </div>

                <div class="numero-explicacao aprendizado">
                  <div class="numero-badge">APRENDIZADO</div>
                  <p>O <strong>Número do Aprendizado</strong>, calculado a partir do dia do seu nascimento, indica as
                    lições de vida que você está aqui para aprender e como isso pode contribuir para o seu crescimento
                    espiritual.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="transicao-mapa">
            <div class="citacao">
              "A Numerologia nos oferece uma rica tapeçaria de números, cada um com seu próprio significado sagrado e
              influência mágica em nossa vida. A seguir, vamos explorar o que é um Mapa Numerológico — seu guia pessoal
              para a autodescoberta!"
            </div>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/capa/capa_mapa_numerologico.jpg" alt="Mapa Numerológico">
          </div>

          <h1 class="titulo-principal">
            O QUE É UM MAPA NUMEROLÓGICO? 🗺️✨
          </h1>

          <div class="definicao-mapa">
            <div class="metafora-tesouro">
              <div class="texto-metafora">
                <p>Um Mapa Numerológico é semelhante a um mapa do tesouro mágico, mas em vez de procurar por ouro
                  material, ele nos ajuda a descobrir tesouros ainda mais valiosos: <strong>o conhecimento sagrado sobre
                    nós mesmos e nosso potencial infinito</strong>.</p>
              </div>
            </div>

            <div class="descricao-detalhada">
              <p>O Mapa Numerológico é um retrato detalhado e místico de uma pessoa, desenhado não com pincel e tinta,
                mas com números sagrados que carregam vibrações cósmicas únicas.</p>

              <div class="componentes-mapa">
                <div class="componente">
                  <div class="icone-componente">📅</div>
                  <p><strong>Data de Nascimento:</strong> O momento sagrado em que sua alma escolheu encarnar</p>
                </div>
                <div class="componente">
                  <div class="icone-componente">📝</div>
                  <p><strong>Nome Completo:</strong> A vibração sonora que carrega sua essência</p>
                </div>
              </div>

              <div class="numeros-calculados">
                <h3>🔢 Números Sagrados Calculados:</h3>
                <div class="lista-numeros">
                  <span class="numero-item">Caminho da Vida</span>
                  <span class="numero-item">Expressão</span>
                  <span class="numero-item">Alma</span>
                  <span class="numero-item">Personalidade</span>
                  <span class="numero-item">Aprendizado</span>
                  <span class="numero-item">Poder</span>
                  <span class="numero-item">E muito mais...</span>
                </div>
              </div>
            </div>
          </div>

          <div class="proposito-mapa">
            <h2 class="titulo-secao">
              🎯 O PROPÓSITO SAGRADO DO SEU MAPA
            </h2>

            <div class="explicacao-proposito">
              <p>O propósito de um Mapa Numerológico é nos ajudar a entender melhor <strong>quem realmente somos</strong> e <strong>qual é o nosso caminho sagrado na vida</strong>.</p>
            </div>

            <div class="analogia-estradas">
              <p>Assim como um mapa de estradas nos mostra a melhor rota para chegar a um destino, o Mapa Numerológico nos mostra o caminho iluminado para alcançar nosso potencial máximo e nossa realização espiritual.</p>
            </div>

            <div class="revelacoes-mapa">
              <h3>✨ O Que Seu Mapa Pode Revelar:</h3>
              <div class="grid-revelacoes">
                <div class="revelacao-item forças">
                  <div class="icone-revelacao">💪</div>
                  <h4>Pontos Fortes</h4>
                  <p>Seus talentos naturais e dons únicos</p>
                </div>
                <div class="revelacao-item fraquezas">
                  <div class="icone-revelacao">🎯</div>
                  <h4>Áreas de Crescimento</h4>
                  <p>Aspectos a desenvolver e aprimorar</p>
                </div>
                <div class="revelacao-item desejos">
                  <div class="icone-revelacao">❤️</div>
                  <h4>Desejos Profundos</h4>
                  <p>O que sua alma verdadeiramente anseia</p>
                </div>
                <div class="revelacao-item oportunidades">
                  <div class="icone-revelacao">🌟</div>
                  <h4>Oportunidades</h4>
                  <p>Caminhos dourados à sua frente</p>
                </div>
                <div class="revelacao-item desafios">
                  <div class="icone-revelacao">⛰️</div>
                  <h4>Desafios</h4>
                  <p>Lições transformadoras pela frente</p>
                </div>
                <div class="revelacao-item percepcao">
                  <div class="icone-revelacao">👁️</div>
                  <h4>Percepção Externa</h4>
                  <p>Como os outros te veem e sentem</p>
                </div>
              </div>
            </div>
          </div>

          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/interpretacao_mapa.png" alt="Interpretação do Mapa">
          </div>

          <h1 class="titulo-principal">
            COMO LER E INTERPRETAR O MAPA NUMEROLÓGICO 🔍
          </h1>

          <div class="introducao-interpretacao">
            <p class="texto-abertura">Entender o seu Mapa Numerológico é como descobrir um novo manual sagrado para a
              sua vida. Cada número traz uma visão diferente e preciosa sobre quem você é e o que você pode alcançar!
            </p>
          </div>

          <div class="exemplos-interpretacao">
            <div class="exemplo-numero destino-1">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">1</div>
                <h3>🏆 NÚMERO DO DESTINO 1</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> Forte tendência para liderança e independência</p>
                <div class="aplicacao-pratica">
                  <div class="icone-pratica">💡</div>
                  <p><strong>Na Prática:</strong> Sabendo disso, você pode começar a confiar mais em suas decisões e talvez assumir um papel de liderança no trabalho ou na comunidade.</p>
                </div>
              </div>
            </div>
            <div class="exemplo-numero expressao-2">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">2</div>
                <h3>🤝 NÚMERO DE EXPRESSÃO 2</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> Talento para trabalho em equipe e grande empatia</p>
                <div class="aplicacao-pratica">
                  <div class="icone-pratica">💡</div>
                  <p><strong>Na Prática:</strong> Você pode se destacar em profissões que envolvam cuidar de pessoas ou
                    resolver conflitos, como enfermagem ou mediação.</p>
                </div>
              </div>
            </div>

            <div class="exemplo-numero alma-5">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">5</div>
                <h3>🦅 NÚMERO DA ALMA 5</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> Forte desejo por liberdade e aventura</p>
                <div class="aplicacao-pratica">
                  <div class="icone-pratica">💡</div>
                  <p><strong>Na Prática:</strong> Sabendo disso, você pode planejar mais viagens e aventuras em sua vida
                    ou buscar um trabalho que ofereça maior flexibilidade.</p>
                </div>
              </div>
            </div>

            <div class="exemplo-numero personalidade-9">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">9</div>
                <h3>🌍 NÚMERO DA PERSONALIDADE 9</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> As pessoas veem você como alguém generoso e altruísta</p>
                <div class="aplicacao-pratica">
                  <div class="icone-pratica">💡</div>
                  <p><strong>Na Prática:</strong> Sabendo disso, você pode usar essas qualidades para criar relações
                    mais fortes e significativas.</p>
                </div>
              </div>
            </div>

            <div class="exemplo-numero aprendizado-6">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">6</div>
                <h3>👨‍🏫 NÚMERO DO APRENDIZADO 6</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> Dom especial para ensinar ou aconselhar</p>
                <div class="aplicacao-pratica">
                  <div class="icone-pratica">💡</div>
                  <p><strong>Na Prática:</strong> Considerar dar aulas particulares ou se tornar um conselheiro pode ser
                    uma excelente ideia para sua realização.</p>
                </div>
              </div>
            </div>

            <div class="exemplo-numero maturidade-8">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">8</div>
                <h3>💰 NÚMERO DA MATURIDADE 8</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> Potencial para prosperidade financeira e poder</p>
                <div class="aplicacao-pratica">
                  <p><strong>Na Prática:</strong> Sabendo disso, você pode tomar decisões financeiras com mais confiança
                    e buscar posições de liderança.</p>
                </div>
              </div>
            </div>

            <div class="exemplo-numero desafio-7">
              <div class="cabecalho-exemplo">
                <div class="numero-exemplo">7</div>
                <h3>🔮 NÚMERO DE DESAFIO 7</h3>
              </div>
              <div class="conteudo-exemplo">
                <p><strong>Significado:</strong> Desafios relacionados à espiritualidade ou busca por conhecimento</p>
                <div class="aplicacao-pratica">
                  <div class="icone-pratica">💡</div>
                  <p><strong>Na Prática:</strong> Aulas, cursos ou livros sobre espiritualidade podem ser úteis para
                    superar esses desafios transformadores.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="convite-descoberta">
            <div class="texto-convite">
              <h3>🌟 Agora que você compreende como os números sagrados influenciam sua vida...</h3>
              <p>Está pronto para mergulhar no seu próprio Mapa Numerológico e descobrir todos os tesouros que sua alma
                trouxe para esta existência? A jornada de autodescoberta mais fascinante da sua vida está prestes a
                começar!</p>
            </div>
          </div>
        </div>

        <div v-if="pagina == 4" ref="textoPdf4">
          <h1 class="titulo-principal">
            DESVENDANDO OS SEGREDOS DOS SEUS NÚMEROS SAGRADOS ✨
          </h1>

          <div class="introducao-numeros">
            <p class="texto-abertura">Cada número em seu mapa numerológico é como uma chave dourada que abre diferentes
              câmaras do templo da sua alma. Vamos explorar cada um desses tesouros numerológicos e descobrir como eles
              revelam aspectos únicos da sua essência divina!</p>
          </div>

          <div class="secao-numero alma">
            <div class="cabecalho-numero">
              <div class="icone-numero-grande">💖</div>
              <div class="titulo-numero">
                <h2>O QUE É O NÚMERO DA ALMA?</h2>
                <p class="subtitulo">O Desejo Sagrado do Seu Coração</p>
              </div>
            </div>

            <div class="conteudo-numero">
              <div class="definicao">
                <p>O <strong>Número da Alma</strong>, também conhecido como o número do desejo do coração, reflete seus
                  desejos internos mais profundos — aquilo que você verdadeiramente deseja ser, ter ou fazer na vida. É
                  um número extremamente importante porque revela sua motivação interna sagrada, o que realmente faz sua
                  alma vibrar e te levanta da cama todos os dias.</p>
              </div>

              <div class="aplicacao-pratica alma-pratica">
                <div class="icone-aplicacao">🎯</div>
                <div class="texto-aplicacao">
                  <h3>Como Usar na Prática:</h3>
                  <p>Sabendo o seu Número da Alma, você pode direcionar melhor suas ações para atingir o que sua
                    essência verdadeiramente deseja. Por exemplo, se o seu Número da Alma indicar um forte desejo de
                    ajudar os outros, você pode buscar oportunidades de voluntariado, trabalhar em ONGs ou escolher uma
                    profissão que permita esse cuidado sagrado com o próximo, como medicina ou assistência social.</p>
                </div>
              </div>
              <div class="calculo-metodo">
                <div class="cabecalho-calculo">
                  <div class="icone-calculo">🔢</div>
                  <h4>Como é Calculado:</h4>
                </div>
                <p>Este número mágico é obtido somando apenas as <strong>vogais</strong> do seu nome completo. As vogais
                  revelam seus desejos internos, sonhos e as motivações ocultas que movem sua vida. As letras são
                  convertidas em números que, somados, são reduzidos a um único dígito sagrado.</p>
              </div>
            </div>
          </div>

          <div class="secao-numero expressao">
            <div class="cabecalho-numero">
              <div class="icone-numero-grande">💎</div>
              <div class="titulo-numero">
                <h2>O QUE É O NÚMERO DE EXPRESSÃO?</h2>
                <p class="subtitulo">O Mapa dos Seus Talentos Ocultos</p>
              </div>
            </div>

            <div class="conteudo-numero">
              <div class="definicao">
                <p>O <strong>Número de Expressão</strong> é como um mapa sagrado para uma mina de ouro escondida dentro
                  de você. Ele revela suas habilidades naturais e talentos inatos divinos, muitos dos quais você pode
                  ainda não estar plenamente consciente — são dons que sua alma trouxe para esta existência.</p>
              </div>
              <div class="detalhes-tecnicos">
                <div class="icone-tecnico">⚙️</div>
                <p>De maneira mais técnica, o Número de Expressão é derivado de <strong>todas as letras</strong> do seu
                  nome completo, conforme registrado no nascimento. Ele traz à tona as habilidades, competências e
                  talentos que você possui nesta vida — é a expressão completa do seu potencial divino.</p>
              </div>

              <div class="aplicacao-pratica expressao-pratica">
                <div class="icone-aplicacao">🌟</div>
                <div class="texto-aplicacao">
                  <h3>Exemplos Práticos de Aplicação:</h3>
                  <div class="exemplos-grid">
                    <div class="exemplo-item">
                      <div class="icone-exemplo">🗣️</div>
                      <p><strong>Talento para Comunicação:</strong> Você pode se destacar em carreiras como jornalismo,
                        publicidade ou ensino.</p>
                    </div>
                    <div class="exemplo-item">
                      <div class="icone-exemplo">🔍</div>
                      <p><strong>Habilidade com Detalhes:</strong> Pode prosperar em campos como contabilidade ou
                        administração de empresas.</p>
                    </div>
                  </div>
                  <p class="conclusao-exemplo">Conhecer o seu Número de Expressão pode lhe dar uma vantagem
                    significativa na vida, revelando caminhos onde você naturalmente brilhará!</p>
                </div>
              </div>

              <div class="calculo-metodo">
                <div class="cabecalho-calculo">
                  <div class="icone-calculo">🔢</div>
                  <h4>Como é Calculado:</h4>
                </div>
                <p>É calculado a partir de <strong>todas as letras</strong> do seu nome completo. Cada letra corresponde
                  a um número específico (1-9), e esses números são somados até serem reduzidos a um único dígito. Este
                  número revela sua personalidade natural, habilidades e os talentos que você traz ao mundo.</p>
              </div>
            </div>
          </div>

          <div class="secao-numero destino">
            <div class="cabecalho-numero">
              <div class="icone-numero-grande">🛤️</div>
              <div class="titulo-numero">
                <h2>O QUE É O NÚMERO DO DESTINO?</h2>
                <p class="subtitulo">A Estrada Principal da Sua Vida</p>
              </div>
            </div>
            <div class="conteudo-numero">
              <div class="definicao">
                <p>O <strong>Número do Destino</strong> é como a estrada principal que atravessa toda a sua vida. Ele é
                  a maior rodovia cósmica que você vai percorrer na sua jornada terrena, mostrando a direção principal
                  que sua vida tomará e as lições sagradas que veio aprender.</p>
              </div>

              <div class="exemplos-destino">
                <div class="exemplo-destino prestativo">
                  <div class="numero-destino">6</div>
                  <div class="descricao-destino">
                    <h4>🤗 Exemplo: Pessoa Prestativa (Destino 6)</h4>
                    <p>Imagine uma pessoa muito prestativa e amorosa, sempre disponível para ajudar os outros. Faz
                      sentido que o Número do Destino dela seja <strong>6</strong>, um número associado ao amor, à
                      família e à responsabilidade. Sabendo disso, ela entende melhor porque sempre sentiu uma forte
                      necessidade de cuidar das pessoas ao seu redor, o que lhe dá uma visão mais clara do seu propósito
                      sagrado.</p>
                  </div>
                </div>

                <div class="exemplo-destino aventureiro">
                  <div class="numero-destino">5</div>
                  <div class="descricao-destino">
                    <h4>🦅 Exemplo: Pessoa Aventureira (Destino 5)</h4>
                    <p>Por outro lado, imagine uma pessoa muito independente e que adora aventuras. Se o Número do
                      Destino dela é <strong>5</strong>, que está relacionado à liberdade e a mudanças, ela entende
                      melhor porque se sente mais feliz quando está em movimento e vivendo novas experiências
                      transformadoras.</p>
                  </div>
                </div>
              </div>

              <div class="reflexao-destino">
                <div class="icone-reflexao">🧭</div>
                <p>Portanto, o Número do Destino não define totalmente quem você é, mas pode lhe dar uma ideia preciosa
                  das lições importantes que você veio aprender aqui e dos desafios sagrados que pode enfrentar. Pense
                  nele como uma bússola divina que ajuda a entender o caminho que você veio percorrer nesta existência.
                </p>
              </div>

              <div class="calculo-metodo">
                <div class="cabecalho-calculo">
                  <div class="icone-calculo">🔢</div>
                  <h4>Como é Calculado:</h4>
                </div>
                <p>É calculado a partir de sua <strong>data de nascimento</strong>. Todos os números de sua data de
                  nascimento (dia, mês e ano) são somados continuamente até que se reduzam a um único dígito. Este
                  número reflete o principal percurso de sua vida, destacando oportunidades, desafios e lições
                  essenciais.</p>
              </div>
            </div>
          </div>

          <div class="secao-numero personalidade">
            <div class="cabecalho-numero">
              <div class="icone-numero-grande">🎭</div>
              <div class="titulo-numero">
                <h2>O QUE É O NÚMERO DA PERSONALIDADE?</h2>
                <p class="subtitulo">A Fachada que Você Apresenta ao Mundo</p>
              </div>
            </div>
            <div class="conteudo-numero">
              <div class="definicao">
                <p>Pense no <strong>Número da Personalidade</strong> como a fachada sagrada que você apresenta ao mundo.
                  Quando você conhece alguém pela primeira vez, essa pessoa forma uma primeira impressão com base no que
                  vê e sente. Essa impressão energética é o que chamamos de Número da Personalidade na numerologia.</p>
              </div>
            
              <div class="funcao-personalidade">
                <div class="icone-funcao">👁️</div>
                <p>O Número da Personalidade indica como você é percebido pelas pessoas ao seu redor, especialmente por
                  aquelas que não te conhecem bem. É como um cartão de visitas cósmico que mostra algumas
                  características suas antes mesmo de qualquer conversa acontecer.</p>
              </div>

              <div class="aplicacao-pratica personalidade-pratica">
                <div class="icone-aplicacao">💡</div>
                <div class="texto-aplicacao">
                  <h3>Como Usar Essa Sabedoria:</h3>
                  <p>Entender o seu Número da Personalidade pode ajudar a compreender por que as pessoas reagem a você
                    de determinadas maneiras. Por exemplo, se seu Número da Personalidade indica uma aparência séria e
                    reservada, você pode entender por que algumas pessoas podem achá-lo um pouco distante no primeiro
                    encontro. Sabendo disso, você pode tomar a iniciativa de mostrar mais do seu lado acolhedor e
                    amigável, quebrando essa primeira impressão e revelando sua verdadeira essência.</p>
                </div>
              </div>

              <div class="calculo-metodo">
                <div class="cabecalho-calculo">
                  <div class="icone-calculo">🔢</div>
                  <h4>Como é Calculado:</h4>
                </div>
                <p>Diferente do número de expressão, o número de personalidade é calculado usando apenas as
                  <strong>consoantes</strong> do seu nome. Este número reflete como você se apresenta e é percebido pelo
                  mundo externo, indicando a impressão energética que você deixa nas outras pessoas.</p>
              </div>
            </div>
          </div>

          <div class="secao-numero subconsciente">
            <div class="cabecalho-numero">
              <div class="icone-numero-grande">🧠</div>
              <div class="titulo-numero">
                <h2>O QUE É O NÚMERO DO SUBCONSCIENTE?</h2>
                <p class="subtitulo">Sua Força Interior Oculta</p>
              </div>
            </div>
            <div class="conteudo-numero">
              <div class="definicao">
                <p>O <strong>Número do Subconsciente</strong> reflete a sua capacidade divina de lidar com desafios e a
                  sua reação instintiva a situações de pressão. Ele é derivado das letras que aparecem repetidamente no
                  seu nome completo. Este número sagrado revela os recursos internos que você tem à disposição quando
                  enfrenta dificuldades da vida.</p>
              </div>

              <div class="beneficios-subconsciente">
                <div class="icone-beneficio">⚡</div>
                <div class="texto-beneficio">
                  <h3>O Poder do Autoconhecimento:</h3>
                  <p>Quando você conhece o seu Número do Subconsciente, pode compreender melhor suas reações automáticas
                    e padrões de comportamento inconscientes. Por exemplo, se o seu Número do Subconsciente indicar uma
                    alta capacidade de resiliência, você pode se sentir mais confiante ao enfrentar desafios, sabendo
                    que possui uma força interior divina para superar obstáculos.</p>
                </div>
              </div>
              <div class="metafora-reserva">
                <div class="icone-metafora">🏛️</div>
                <p>Entender o seu Número do Subconsciente é como descobrir uma reserva oculta de força e recursos
                  sagrados dentro de você. Isso pode ser extremamente útil em momentos de estresse ou crise,
                  proporcionando uma compreensão mais profunda de suas capacidades e limitando reações impulsivas que
                  não servem ao seu crescimento.</p>
              </div>
            </div>
          </div>

          <div class="secao-numero desafios">
            <div class="cabecalho-numero">
              <div class="icone-numero-grande">⛰️</div>
              <div class="titulo-numero">
                <h2>NÚMEROS DE DESAFIO</h2>
                <p class="subtitulo">As Lições Sagradas da Sua Jornada</p>
              </div>
            </div>
            <div class="conteudo-numero">
              <div class="definicao">
                <p>A vida é como uma escola cósmica, e os <strong>Números de Desafio</strong> são como os deveres de
                  casa sagrados que precisamos fazer para aprender nossas lições e evoluir espiritualmente. Esses
                  números, na numerologia, são como um mapa divino que nos mostra as lições que precisamos aprender ao
                  longo da vida.</p>
              </div>
              <div class="proposito-desafios">
                <div class="icone-proposito">🌱</div>
                <p>Eles apontam para os obstáculos que podemos encontrar — que são exatamente o que precisamos para
                  crescer e evoluir como seres de luz. Conhecendo seus Números de Desafio, você pode usá-los para
                  aprender e crescer conscientemente. Lembre-se: os desafios são oportunidades douradas de crescimento!
                </p>
              </div>
              <div class="fases-desafios">
                <h3>🕐 As Fases Sagradas dos Desafios:</h3>
                <div class="grid-fases">
                  <div class="fase-item primeiro">
                    <div class="numero-fase">1º</div>
                    <div class="conteudo-fase">
                      <h4>Primeiro Desafio (0 a 30 anos)</h4>
                      <p>Geralmente aparece na infância e adolescência, influenciando o desenvolvimento inicial da
                        personalidade e os primeiros testes sagrados de caráter.</p>
                    </div>
                  </div>
                  <div class="fase-item segundo">
                    <div class="numero-fase">2º</div>
                    <div class="conteudo-fase">
                      <h4>Segundo Desafio (30 a 40 anos)</h4>
                      <p>Acontece durante a juventude até a meia-idade, quando as responsabilidades começam a aumentar e
                        as decisões de vida mais significativas são tomadas.</p>
                    </div>
                  </div>
                  <div class="fase-item terceiro">
                    <div class="numero-fase">3º</div>
                    <div class="conteudo-fase">
                      <h4>Terceiro Desafio (40 a 55 anos)</h4>
                      <p>Aparece na meia-idade, muitas vezes trazendo testes de adaptação e integração da sabedoria
                        adquirida ao longo dos anos de experiência.</p>
                    </div>
                  </div>
                  <div class="fase-item quarto">
                    <div class="numero-fase">4º</div>
                    <div class="conteudo-fase">
                      <h4>Quarto Desafio (55 anos em diante)</h4>
                      <p>Pode influenciar durante toda a vida, sendo um desafio constante e profundo que pode ser
                        revisitado em várias ocasiões para aprofundar a sabedoria.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="utilizacao-desafios">
                <div class="icone-utilizacao">🗺️</div>
                <div class="texto-utilizacao">
                  <h3>Como Utilizar Essa Sabedoria Sagrada:</h3>
                  <p>Compreendendo seus Números de Desafio, você está melhor preparado para enfrentar os obstáculos da
                    vida com sabedoria e propósito. Use essa informação para se preparar conscientemente e aprender as
                    lições que a vida quer ensinar. Cada desafio é uma oportunidade dourada para crescer e evoluir,
                    tornando você mais forte, sábio e iluminado ao longo do tempo.</p>
                  <div class="convite-aventura">
                    <p><strong>Pegue seu mapa e prepare-se para a aventura da vida!</strong> Com seus Números de Desafio
                      em mãos, você está mais preparado do que nunca para aprender, crescer e brilhar! ✨</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="secao-calculos">
            <div class="cabecalho-calculos">
              <div class="icone-numero-grande">🔮</div>
              <div class="titulo-numero">
                <h2>COMO SEUS NÚMEROS SAGRADOS SÃO CALCULADOS</h2>
                <p class="subtitulo">A Ciência Mística Por Trás da Sua Numerologia</p>
              </div>
            </div>
            <div class="introducao-calculos">
              <p>A seleção dos seus números da sorte foi realizada por meio de uma análise detalhada e sagrada do seu
                nome e data de nascimento, empregando os princípios ancestrais da numerologia. Este processo místico
                identifica os números que mais ressoam com suas energias pessoais únicas.</p>
            </div>
            <div class="metodos-calculo">
              <div class="metodo-item maturidade">
                <div class="cabecalho-metodo">
                  <div class="icone-metodo">🌅</div>
                  <h3>NÚMERO DA MATURIDADE</h3>
                </div>
                <div class="conteudo-metodo">
                  <p>O número da maturidade é calculado somando o <strong>número da vida (destino)</strong> e o
                    <strong>número de expressão</strong>. Este número representa as forças sagradas que você começa a
                    compreender e a integrar mais plenamente à medida que amadurece, geralmente por volta dos 35-40 anos
                    de idade.</p>
                  <div class="destaque-maturidade">
                    <p>Ele indica as energias que se tornam mais proeminentes e influentes durante a segunda metade da
                      sua vida, guiando-o para o seu pleno potencial e realizações maiores — é o florescimento da sua
                      sabedoria acumulada!</p>
                  </div>
                </div>
              </div>
              <div class="metodo-item personalizacao">
                <div class="cabecalho-metodo">
                  <div class="icone-metodo">✨</div>
                  <h3>PERSONALIZAÇÃO DOS NÚMEROS DA SORTE</h3>
                </div>
                <div class="conteudo-metodo">
                  <p>Os números finais são cuidadosamente personalizados para refletir sua energia única e divina. Eles
                    são projetados para alinhar-se com suas vibrações naturais e ajudar a atrair as oportunidades e
                    sucessos que sua alma busca nesta existência.</p>
                  <div class="beneficios-personalizacao">
                    <div class="icone-beneficio">🌟</div>
                    <p>Estes números não apenas ressoam com suas energias pessoais, mas também harmonizam com as
                      influências cósmicas que moldam seu destino. Incorporá-los em sua vida cotidiana pode trazer uma
                      nova dimensão de sorte e prosperidade, orientando suas decisões e atraindo energias benéficas.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="transicao-final">
            <div class="citacao">
              "Com isso, estamos prontos para explorar o que cada número significa especificamente para você e como eles
              podem guiar sua jornada sagrada de autoconhecimento. Prepare-se para descobrir os segredos numerológicos
              da sua alma! 🌟"
            </div>
          </div>
        </div>

        <div v-if="pagina == 5" ref="textoPdf5">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/numero_alma.png" alt="Número da Alma">
          </div>
          <h1 class="titulo-principal">
            SEU NÚMERO DA ALMA ✨
          </h1>

          <div class="introducao-numero-alma">
            <p class="texto-abertura">O Número da Alma revela os desejos mais profundos do seu coração e o que verdadeiramente motiva sua existência. É a voz sussurrada da sua essência divina, mostrando o que sua alma veio buscar nesta encarnação sagrada.</p>
          </div>
          <div class="soul-content-container">
            <div class="soul-header">
              <div class="soul-icon">{{ getSoulIcon(soulNumber) }}</div>
              <div class="soul-header-text">
                <h2 class="soul-title">{{ getSoulTitle(soulNumber) }}</h2>
                <p class="soul-subtitle">{{ getSoulSubtitle(soulNumber) }}</p>
              </div>
            </div>
            <div class="soul-description" v-html="soulText">
            </div>
          </div>
        </div>

        <div v-if="pagina == 6" ref="textoPdf6">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/numero_expressao.png" alt="Número de Expressão">
          </div>
          <h1 class="titulo-principal">
            SEU NÚMERO DE EXPRESSÃO 💎
          </h1>

          <div class="introducao-numero-expressao">
            <p class="texto-abertura">O Número de Expressão é como um mapa sagrado dos seus talentos naturais e habilidades únicas. Ele revela como você se manifesta no mundo e quais dons divinos trouxe para compartilhar com a humanidade.</p>
          </div>
          <div class="expression-content-container">
            <div class="expression-header">
              <div class="expression-icon">{{ getExpressionIcon(expressionNumber) }}</div>
              <div class="expression-header-text">
                <h2 class="expression-title">{{ getExpressionTitle(expressionNumber) }}</h2>
                <p class="expression-subtitle">{{ getExpressionSubtitle(expressionNumber) }}</p>
              </div>
            </div>
            <div class="expression-description" v-html="expressionText">
            </div>
          </div>
        </div>

        <div v-if="pagina == 7" ref="textoPdf7">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/numero_vida.png" alt="Número do Caminho da Vida">
          </div>

          <h1 class="titulo-principal">
            SEU CAMINHO DA VIDA 🛤️
          </h1>

          <div class="introducao-caminho-vida">
            <p class="texto-abertura">O Caminho da Vida é sua estrada principal nesta existência - a jornada sagrada que sua alma escolheu percorrer. Ele mostra as lições principais, desafios transformadores e oportunidades douradas que encontrará ao longo da vida.</p>
          </div>

          <div class="conteudo-life-text" v-html="lifeText"></div>
        </div>

        <div v-if="pagina == 8" ref="textoPdf8">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/numero_personalidade.png" alt="Número da Personalidade">
          </div>

          <h1 class="titulo-principal">
            SUA PERSONALIDADE EXTERIOR 🎭
          </h1>

          <div class="introducao-personalidade">
            <p class="texto-abertura">O Número da Personalidade revela como você é percebido pelo mundo exterior - a primeira impressão energética que transmite às pessoas. É a fachada sagrada que sua alma escolheu apresentar nesta encarnação.</p>
          </div>

          <div class="conteudo-personality-text" v-html="personalityText"></div>
        </div>

        <div v-if="pagina == 9" ref="textoPdf9">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/numero_subconsciente.png" alt="Número do Subconsciente">
          </div>

          <h1 class="titulo-principal">
            SEU EU SUBCONSCIENTE 🧠
          </h1>

          <div class="introducao-subconsciente">
            <p class="texto-abertura">O Número do Subconsciente revela sua força interior oculta e como você reage instintivamente aos desafios da vida. É o reservatório sagrado de recursos internos que sua alma possui para superar obstáculos.</p>
          </div>

          <div class="conteudo-subconscious-text" v-html="subconsciousText"></div>
        </div>

        <div v-if="pagina == 10" ref="textoPdf10">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/numeros_desafio.png" alt="Números de Desafio">
          </div>

          <h1 class="titulo-principal">
            SEUS NÚMEROS DE DESAFIO ⛰️
          </h1>

          <div class="introducao-desafios">
            <p class="texto-abertura">Os Números de Desafio são as lições sagradas que sua alma veio aprender nesta existência. Eles representam os obstáculos transformadores e oportunidades de crescimento que encontrará ao longo da jornada da vida.</p>
            
            <div class="sequencia-desafios">
              <h3>🔢 Sua Sequência Sagrada de Desafios:</h3>
              <p class="numeros-desafio">{{ challengeNumbers.first }}, {{ challengeNumbers.second }}, {{ challengeNumbers.third }} e {{ challengeNumbers.main }}</p>
            </div>
          </div>

          <div class="desafios-detalhados">
            <div class="desafio-primeiro challenge-number">
              <h2>🌱 PRIMEIRO DESAFIO (0-30 anos)</h2>
              <div v-html="challengeNumbers.firstText" class="challenge-content"></div>
            </div>

            <div class="desafio-segundo challenge-number">
              <h2>🌿 SEGUNDO DESAFIO (30-40 anos)</h2>
              <div v-html="challengeNumbers.secondText" class="challenge-content"></div>
            </div>

            <div class="desafio-terceiro challenge-number">
              <h2>🌳 TERCEIRO DESAFIO (40-55 anos)</h2>
              <div v-html="challengeNumbers.thirdText" class="challenge-content"></div>
            </div>

            <div class="desafio-principal challenge-number">
              <h2>🏔️ DESAFIO PRINCIPAL (55+ anos)</h2>
              <div v-html="challengeNumbers.mainText" class="challenge-content"></div>
            </div>
          </div>
        </div>

        <div v-if="pagina == 11" ref="textoPdf11">
          <div class="image-placeholder">
            <img class="img-relatorio" src="../assets/img/poder_numeros_universo.png"
              alt="Poder dos Números no Universo">
          </div>
          <h1 class="titulo-principal">
            O PODER TRANSFORMADOR DOS SEUS NÚMEROS SAGRADOS ✨
          </h1>

          <div class="reforco-importancia">
            <div class="cabecalho-reforco">
              <div class="icone-reforco-grande">🌟</div>
              <div class="titulo-reforco">
                <h2>REFORÇO DA IMPORTÂNCIA DOS NÚMEROS</h2>
                <p class="subtitulo-reforco">Símbolos Poderosos que Ressoam com o Universo</p>
              </div>
            </div>
            <div class="conteudo-reforco">
              <div class="definicao-numeros">
                <p>Os números são muito mais do que simples dígitos matemáticos — eles são <strong>símbolos poderosos e
                    sagrados</strong> que ressoam com as energias do universo e com sua essência pessoal única.
                  Incorporá-los conscientemente em sua vida diária pode abrir portas douradas para novas oportunidades,
                  atrair prosperidade abundante e trazer um sentido profundo de harmonia e alinhamento com as forças
                  cósmicas que influenciam seu destino.</p>
              </div>

              <div class="aplicacoes-praticas">
                <h3>🎯 Aplicações Práticas na Sua Vida Diária:</h3>
                <div class="grid-aplicacoes">
                  <div class="aplicacao-item datas">
                    <div class="icone-aplicacao">📅</div>
                    <div class="conteudo-aplicacao">
                      <h4>Datas Favoráveis</h4>
                      <p>Agende compromissos importantes em datas que ressoem com seus números sagrados</p>
                    </div>
                  </div>
                  <div class="aplicacao-item lugares">
                    <div class="icone-aplicacao">🪑</div>
                    <div class="conteudo-aplicacao">
                      <h4>Escolhas de Lugares</h4>
                      <p>Selecione números de assentos, mesas ou quartos que vibrem com sua energia</p>
                    </div>
                  </div>
                  <div class="aplicacao-item senhas">
                    <div class="icone-aplicacao">🔐</div>
                    <div class="conteudo-aplicacao">
                      <h4>Senhas e Códigos</h4>
                      <p>Use seus números da sorte em senhas e códigos pessoais para atrair proteção</p>
                    </div>
                  </div>
                  <div class="aplicacao-item decisoes">
                    <div class="icone-aplicacao">⚖️</div>
                    <div class="conteudo-aplicacao">
                      <h4>Decisões Importantes</h4>
                      <p>Consulte seus números antes de tomar decisões significativas na vida</p>
                    </div>
                  </div>
                </div>
                <div class="acumulo-energias">
                  <div class="icone-acumulo">⚡</div>
                  <p class="texto-acumulo">Utilizar seus números em decisões importantes e pequenas escolhas cotidianas
                    é uma maneira prática e poderosa de aumentar suas chances de sucesso e bem-estar. Cada pequena ação
                    consciente pode acumular energias positivas e direcioná-las magneticamente para você!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="mensagem-final">
            <div class="cabecalho-mensagem">
              <div class="icone-mensagem-grande">💫</div>
              <div class="titulo-mensagem">
                <h2>MENSAGEM FINAL DE INCENTIVO</h2>
                <p class="subtitulo-mensagem">Uma Ferramenta Poderosa Para Sua Transformação</p>
              </div>
            </div>
            <div class="conteudo-mensagem">
              <div class="ferramenta-poderosa">
                <div class="icone-ferramenta">🛠️</div>
                <div class="texto-ferramenta">
                  <p>Lembre-se, você tem nas mãos uma <strong>ferramenta poderosa e sagrada</strong> para transformar
                    sua vida de maneira significativa e profunda. Os números foram cuidadosamente selecionados através
                    de cálculos ancestrais para ressoar perfeitamente com suas energias astrológicas únicas. Ao utilizar
                    este mapa numerológico, você está se alinhando conscientemente com as forças benéficas do universo
                    que trabalham constantemente a seu favor.</p>
                </div>
              </div>
              <div class="crenca-poder">
                <div class="background-crenca">
                  <div class="icone-crenca">🌟</div>
                  <div class="texto-crenca">
                    <h3>✨ Acredite no Poder Transformador</h3>
                    <p>Acredite profundamente no poder dos números e na capacidade extraordinária que eles têm de
                      influenciar sua vida de forma positiva e abundante. Permita que essa nova abordagem sagrada traga
                      mais clareza cristalina, confiança inabalável e sucesso duradouro em suas escolhas diárias.</p>
                  </div>
                </div>
              </div>
              <div class="caminho-prosperidade">
                <div class="icone-caminho">🛤️</div>
                <p class="texto-caminho">Cada passo que você dá com a orientação sábia dos seus números da sorte é um
                  passo consciente em direção a uma vida mais próspera, plena e alinhada com seu propósito divino. Você
                  está caminhando na direção certa!</p>
              </div>
            </div>
          </div>
          <div class="apoio-jornada">
            <div class="conteudo-apoio">
              <div class="icone-apoio-grande">🤝</div>
              <div class="texto-apoio">
                <h3>🌈 Estamos Juntos Nessa Jornada Sagrada</h3>
                <p>Estamos unidos nessa jornada transformadora de autoconhecimento, e eu estou aqui para apoiá-la com
                  amor e dedicação em cada etapa do caminho luminoso que você está percorrendo.</p>

                <div class="orientacoes-finais">
                  <div class="orientacao-item">
                    <div class="icone-orientacao">🙏</div>
                    <p><strong>Confie no Processo:</strong> Cada experiência é uma lição valiosa</p>
                  </div>
                  <div class="orientacao-item">
                    <div class="icone-orientacao">💖</div>
                    <p><strong>Siga Suas Intuições:</strong> Sua sabedoria interior é seu melhor guia</p>
                  </div>
                  <div class="orientacao-item">
                    <div class="icone-orientacao">🎁</div>
                    <p><strong>Aproveite as Maravilhas:</strong> Seus números da sorte são presentes do universo</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="despedida-final">
            <div class="background-despedida">
              <div class="conteudo-despedida">
                <div class="icone-despedida">🌟</div>
                <h3>Um Grande Abraço Cósmico! 🤗</h3>
                <p class="frase-sorte">Que a sorte, a abundância e a felicidade estejam sempre ao seu lado, iluminando
                  cada passo da sua jornada extraordinária!</p>

                <div class="assinatura-mahila">
                  <div class="foto-mahila">
                    <img src="../assets/img/img_mahila.png" alt="Mahila Luz" class="img-mahila">
                  </div>
                  <div class="info-mahila">
                    <p class="nome-mahila"><strong>Mahila Luz</strong></p>
                    <p class="titulo-mahila">Numeróloga | Terapeuta Holística | Guia Espiritual</p>
                    <p class="frase-mahila">"Iluminando caminhos através da sabedoria dos números" ✨</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="convite-continuidade">
            <div class="background-convite">
              <h3>🌟 Continue Sua Jornada de Autoconhecimento</h3>
              <p>Este é apenas o começo da sua transformação numerológica. Há muito mais para descobrir sobre os
                mistérios da sua alma!</p>
            </div>
          </div>
          <div class="gratidao-final">
            <div class="icone-gratidao">🙏</div>
            <p><em>Gratidão infinita por permitir que eu seja parte da sua jornada de despertar numerológico. Que os
                números sagrados sempre guiem seus passos rumo à felicidade plena! 💫</em></p>
          </div>
        </div>
    </div>    
    <div class="w-full max-w-3xl px-4 py-8 bg-white navegacao">
      <button class="button-nav voltar" @click="voltarPagina()" v-if="pagina > 1">Voltar</button>
      <button class="button-nav proxima" @click="mudarPagina()" v-if="pagina != 11">Próxima</button>
    </div>
  </div>
</div>
</template>

<script>
  import html2pdf from "html2pdf.js";
  import jsPDF from 'jspdf';

  import {
    PDFDocument
  } from 'pdf-lib';

  export default {
    name: "SignoDetalhes",
    props: {
      full_name: {
        type: String,
        required: true
      },
      day: {
        type: Number,
        required: true
      },
      month: {
        type: Number,
        required: true
      },
      year: {
        type: Number,
        required: true
      },
      email: {
        type: String,
        required: true
      },
    },
    data() {
      return {
        scrollTimeout: null,
        scrollProgress: 0,
        reportSun: null,
        podeCarregar: false,
        reports: [],
        icons: {
          location: require('@/assets/icons/location.png'),
          calendar: require('@/assets/icons/calendar.png'),
          clock: require('@/assets/icons/clock.png')
        },
        pngDataUrl: null,
        loading: true,
        expressionNumber: null,
        expressionText: null,
        lifeNumber: null,
        lifeText: null,
        soulNumber: null,
        soulText: null,
        personalityNumber: null,
        personalityText: null,
        maturityNumber: null,
        maturityText: null,
        subconsciousSelfNumber: null,
        subconsciousText: null,
        challengeNumbers: {
          first: null,
          firstText: null,
          second: null,
          secondText: null,
          third: null,
          thirdText: null,
          main: null,
          mainText: null
        },
        pagina: 1,
        totalPaginas: 11,
      }
    },
    created() {

      this.chamarApi()
        .then(async () => {
          this.gerarPDF();

          // Depois gera a cartilha de sorte
          await this.generateCartilhaSorte();

          // Por fim, agenda o envio do email com a cartilha de sorte
          await this.scheduleEmail2();

          this.loading = false;
          
          // Garante que a página comece no topo após o carregamento
          this.$nextTick(() => {
            if (typeof window !== 'undefined') {
              window.scrollTo(0, 0);
            }
          });
        })
        .catch(error => {
          console.error('Erro ao gerar cartilha ou agendar email:', error);
          this.loading = false;
          
          // Garante que a página comece no topo mesmo em caso de erro
          this.$nextTick(() => {
            if (typeof window !== 'undefined') {
              window.scrollTo(0, 0);
            }
          });
        });

      // Cálculos necessários
      

      

    },
    methods: {
      /*async gerarPDF() {
        console.log('Iniciando geração de PDF...');
        
        const paginasPorArquivo = 25;
        const totalPartes = Math.ceil(this.totalPaginas / paginasPorArquivo);
        const arquivosGerados = [];

        const paginaAtual = this.pagina;

        for (let parte = 0; parte < totalPartes; parte++) {
          console.log(`Gerando parte ${parte + 1} de ${totalPartes}`);
          
          const todoConteudo = document.createElement('div');
          // Adiciona estilos básicos ao container
          todoConteudo.style.cssText = `
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            background: white;
            font-family: Arial, sans-serif;
            color: black;
            box-sizing: border-box;
          `;

          const inicio = parte * paginasPorArquivo + 1;
          const fim = Math.min(inicio + paginasPorArquivo - 1, this.totalPaginas);

          for (let i = inicio; i <= fim; i++) {
            this.pagina = i;
            await this.$nextTick();
            
            // Aguarda um pouco mais para garantir renderização
            await new Promise(resolve => setTimeout(resolve, 100));

            const textoAtual = this.$refs.textoPdfTodo;

            console.log(`Página ${i}: Elemento encontrado:`, !!textoAtual);
            console.log(`Página ${i}: Altura:`, textoAtual?.offsetHeight);
            console.log(`Página ${i}: Largura:`, textoAtual?.offsetWidth);
            console.log(`Página ${i}: Conteúdo:`, textoAtual?.innerText?.substring(0, 100));

            if (
              textoAtual &&
              textoAtual.offsetHeight > 0 &&
              textoAtual.offsetWidth > 0 &&
              textoAtual.innerText.trim().length > 0
            ) {
              const paginaWrapper = document.createElement('div');
              paginaWrapper.classList.add('pagina');
              paginaWrapper.style.cssText = `
                page-break-after: always;
                width: 100%;
                min-height: 250mm;
                background: white;
                padding: 10mm;
                margin-bottom: 10mm;
              `;

              const clone = textoAtual.cloneNode(true);
              
              // Garante que o clone tenha estilos adequados para PDF
              clone.style.cssText = `
                width: 100%;
                background: white;
                color: black;
                font-size: 14px;
                line-height: 1.6;
              `;
              
              // Remove elementos que podem causar problemas
              const problemElements = clone.querySelectorAll('video, iframe, canvas, svg');
              problemElements.forEach(el => el.remove());
              
              // Corrige imagens
              const images = clone.querySelectorAll('img');
              images.forEach(img => {
                img.style.maxWidth = '100%';
                img.style.height = 'auto';
                if (!img.src || img.src.startsWith('blob:')) {
                  img.remove();
                }
              });
              
              paginaWrapper.appendChild(clone);
              todoConteudo.appendChild(paginaWrapper);
              
              console.log(`Página ${i} adicionada ao PDF`);
            } else {
              console.warn(`Página ${i} ignorada - elemento inválido ou vazio`);
            }
          }

          if (todoConteudo.children.length === 0) {
            console.warn(`Parte ${parte + 1}: Nenhum conteúdo encontrado`);
            continue;
          }

          // Adiciona o elemento temporariamente ao DOM para renderização
          todoConteudo.style.position = 'absolute';
          todoConteudo.style.left = '-9999px';
          todoConteudo.style.top = '0';
          document.body.appendChild(todoConteudo);

          // Configurações do html2pdf para cada parte
          const opcoes = {
            margin: [10, 10, 10, 10],
            image: {
              type: 'jpeg',
              quality: 0.92
            },
            html2canvas: {
              scale: 2, // Aumenta a resolução
              useCORS: true,
              allowTaint: true,
              logging: true,
              width: todoConteudo.scrollWidth,
              height: todoConteudo.scrollHeight,
              backgroundColor: '#ffffff'
            },
            jsPDF: {
              unit: 'mm',
              format: 'a4',
              orientation: 'portrait'
            },
            pagebreak: {
              mode: ['avoid-all', 'css', 'legacy']
            }
          };

          try {
            console.log(`Gerando PDF da parte ${parte + 1}...`);
            const blob = await html2pdf().from(todoConteudo).set(opcoes).outputPdf('blob');
            
            console.log(`PDF parte ${parte + 1} gerado:`, blob.size, 'bytes');
            
            if (blob.size > 1000) { // Verifica se o PDF não está vazio
              arquivosGerados.push(blob);
            } else {
              console.error(`PDF parte ${parte + 1} muito pequeno, provavelmente vazio`);
            }
          } catch (error) {
            console.error(`Erro ao gerar PDF da Parte ${parte + 1}:`, error);
          } finally {
            // Remove o elemento temporário
            document.body.removeChild(todoConteudo);
          }
        }

        // Volta à página original
        this.pagina = paginaAtual;
        await this.$nextTick();

        console.log(`Total de arquivos gerados: ${arquivosGerados.length}`);

        if (arquivosGerados.length === 0) {
          console.error('Nenhum PDF foi gerado com sucesso');
          alert('Erro: Não foi possível gerar o PDF. Verifique se há conteúdo visível na tela.');
          return;
        }

        // Mescla tudo no final
        await this.mesclarPDFs(arquivosGerados);
      },*/
      async gerarPDF() {
        const paginasPorArquivo = 1;
        const totalPartes = Math.ceil(this.totalPaginas / paginasPorArquivo);
        const arquivosGerados = [];

        const paginaAtual = this.pagina;

        for (let parte = 0; parte < totalPartes; parte++) {
          const todoConteudo = document.createElement('div');

          const inicio = parte * paginasPorArquivo + 1;
          const fim = Math.min(inicio + paginasPorArquivo - 1, this.totalPaginas);

          for (let i = inicio; i <= fim; i++) {
            this.pagina = i;
            await this.$nextTick();

            const textoAtual = this.$refs.textoPdfTodo;

            if (
              textoAtual &&
              textoAtual.offsetHeight > 0 &&
              textoAtual.innerText.trim().length > 0
            ) {
              const paginaWrapper = document.createElement('div');
              paginaWrapper.classList.add('pagina');

              const clone = textoAtual.cloneNode(true);
              paginaWrapper.appendChild(clone);
              todoConteudo.appendChild(paginaWrapper);
            }
          }

          // Configurações do html2pdf para cada parte
          const opcoes = {
            margin: 0,
            image: {
              type: 'jpeg',
              quality: 0.98
            },
            html2canvas: {
              scale: 1, // reduzido para evitar problemas de canvas
              useCORS: true,
              logging: false,
            },
            jsPDF: {
              unit: 'mm',
              format: 'a4',
              orientation: 'portrait'
            },
            pagebreak: {
              mode: ['avoid-all', 'css', 'legacy']
            }
          };

          try {
            const blob = await html2pdf().from(todoConteudo).set(opcoes).outputPdf('blob');
            arquivosGerados.push(blob);
          } catch (error) {
            console.error(`Erro ao gerar PDF da Parte ${parte + 1}:`, error);
          }
        }

        // Volta à página original
        this.pagina = paginaAtual;
        await this.$nextTick();

        // Mescla tudo no final
        await this.mesclarPDFs(arquivosGerados);
      },
      async generateCartilhaSorte() {
        this.calculateExpressionNumber();
        this.calculateLifeNumber();
        this.calculateSoulNumber();
        this.calculatePersonalityNumber();
        this.calculateMaturityNumber();
        const doc = new jsPDF({
          compression: 'FAST'
        });
        const pageWidth = doc.internal.pageSize.getWidth();
        const pageHeight = doc.internal.pageSize.getHeight();

        // URL ou caminho local para a imagem
        const imageUrl = require('@/assets/cartilha_xamanica.png');

        // Converter imagem para formato aceito pelo jsPDF
        const imageData = await this.loadImage(imageUrl);

        // Função auxiliar para adicionar texto com verificação de espaço
        /*const addTextWithPageCheck = (text, fontSize, fontType, textColor, x, startY) => {
          doc.setFontSize(fontSize);
          doc.setFont('helvetica', fontType);
          doc.setTextColor(...textColor);
          let textLines = doc.splitTextToSize(text, pageWidth - x * 2);
          let y = startY;
          textLines.forEach(line => {
            if (y + fontSize > pageHeight - 10) { // Checa se a próxima linha cabe na página
              doc.addPage();
              y = 10; // Margem superior após nova página
            }
            doc.text(line, x, y);
            y += fontSize * 0.8; // Ajusta o espaçamento da linha baseado no tamanho da fonte
          });
        };*/


        const addTextWithPageCheck = (text, fontSize, fontType, textColor, x, startY, lineHeightFactor = 0.8) => {
          doc.setFontSize(fontSize);
          doc.setFont('helvetica', fontType);
          doc.setTextColor(...textColor);
          const lines = text.split('\n'); // divide o texto em várias linhas baseado em quebras de linha explícitas
          let y = startY;

          lines.forEach(originalLine => {
            let textLines = doc.splitTextToSize(originalLine, pageWidth - x *
              2); // quebra linhas longas para caberem na largura da página
            textLines.forEach(line => {
              if (y + fontSize > pageHeight - 10) { // Checa se a próxima linha cabe na página
                doc.addPage();
                y = 10; // Reseta a posição y para a margem superior da nova página
              }
              doc.text(line, x, y);
              y += fontSize * lineHeightFactor; // Ajusta o espaçamento da linha
            });
          });

          return y; // Retorna a posição y após adicionar o texto
        };

        // Adicionar imagem ao documento
        // A imagem cobrirá a totalidade da página A4
        doc.addImage(imageData, 'JPEG', 0, 0, 210, 297, undefined, 'FAST');

        // Adicionar nova página
        doc.addPage();

        const rectHeight = 20; // Altura do retângulo para o fundo, em mm

        // Coordenadas e dimensões do retângulo de fundo
        let rectY = 0; // Posição vertical inicial do retângulo no topo da página
        doc.setFillColor(128, 0, 128); // Cor roxa
        doc.rect(0, rectY, pageWidth, rectHeight, 'F'); // Desenha o retângulo roxo desde o topo

        // Adicionar texto normal abaixo do fundo roxo
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal

        const lineHeightFactor = 0.8; // Ajuste esse valor conforme necessário para mais ou menos espaço entre linhas
        const normalTextY = rectY + rectHeight + 10; // Posição Y um pouco abaixo do fundo roxo
        const endY = addTextWithPageCheck(
          'Bem-vindo(a) à Cartilha de Números da Sorte Xamânicos! Este guia foi criado especialmente para você, com base em seu Guia Xamânico Único.',
          13, 'normal', [0, 0, 0], 10, normalTextY, lineHeightFactor);

        const nextContentY = endY + 10;
        const endYCt = addTextWithPageCheck(
          'Acredito que, assim como o Guia Xamânico, os números da sorte podem desempenhar um papel crucial em sua jornada para atrair prosperidade e sucesso.',
          13, 'normal', [0, 0, 0], 10, nextContentY, lineHeightFactor);

        const nextContentYCt2 = endYCt + 10;
        const endYCt2 = addTextWithPageCheck(
          'A Importância dos Números da Sorte Desde tempos antigos, números têm sido associados a diversas energias e vibrações que influenciam nossas vidas de maneiras sutis, mas poderosas. Na numerologia e na astrologia, certos números são considerados auspiciosos, atraindo boa sorte, fortuna e oportunidades.',
          13, 'normal', [0, 0, 0], 10, nextContentYCt2, lineHeightFactor);

        const nextContentYCt3 = endYCt2 + 10;
        const endYCt3 = addTextWithPageCheck(
          'Os números da sorte são importantes porque: \n\nSincronização com Energias Pessoais: Cada pessoa possui uma combinação única de números que ressoam com sua energia pessoal. Esses números podem amplificar suas vibrações positivas e alinhar-se com as forças cósmicas favoráveis a você. \n\nTomada de Decisões: Utilizar números da sorte pode ajudá-lo a tomar decisões mais informadas e propícias em diversas áreas da vida, desde escolhas financeiras até eventos importantes. \n\nAtração de Oportunidades: Incorporar seus números da sorte em seu dia a dia pode abrir portas para novas oportunidades e sucessos inesperados. É como ter um guia invisível que direciona suas ações para resultados mais benéficos. \n\nAumento da Confiança: Conhecer e utilizar seus números da sorte pode aumentar sua confiança e a certeza de que está no caminho certo, proporcionando uma sensação de segurança e bem-estar. ',
          13, 'normal', [0, 0, 0], 10, nextContentYCt3, lineHeightFactor);

        console.log(endYCt3);

        // Verificar a distância até o final da página
        if (nextContentY + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Adicionar o segundo título com fundo roxo
        doc.setFillColor(128, 0, 128);
        doc.rect(0, endYCt3, pageWidth, 20, 'F');
        doc.setFontSize(14);
        doc.setFont('helvetica', 'bold');
        doc.setTextColor(255, 255, 255);
        doc.text(('Explicação Breve de Como Esses Números Foram Determinados').toUpperCase(), pageWidth / 2, endYCt3 +
          (20 / 2) + 3, {
            align: 'center'
          });

        // Texto normal abaixo do segundo título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY2 = endYCt3 + 20 + 10;
        const endY2 = addTextWithPageCheck(
          'A seleção dos seus números da sorte foi realizada por meio de uma análise detalhada do seu nome e data de nascimento, empregando os princípios da numerologia. Este processo identifica os números que mais ressoam com suas energias pessoais. \n\nCálculo do Número de Expressão \nO número de expressão, também conhecido como número de personalidade, é calculado a partir das letras do seu nome completo. Cada letra corresponde a um número específico (1-9), e esses números são somados até serem reduzidos a um único dígito. Este número revela sua personalidade natural, habilidades e os talentos que você traz ao mundo. \n\nCálculo do Número da Vida \nO número da vida, ou número de destino, é calculado a partir de sua data de nascimento. Todos os números de sua data de nascimento (dia, mês e ano) são somados continuamente até que se reduzam a um único dígito. Este número reflete o principal percurso de sua vida, destacando oportunidades, desafios e lições essenciais que você encontrará. \n\nCálculo do Número da Alma \nEste número é obtido somando apenas as vogais de seu nome. As vogais revelam seus desejos internos, sonhos e as motivações ocultas que movem sua vida. Como nos outros cálculos, as letras são convertidas em números que, somados, são reduzidos a um único dígito. \n\nCálculo do Número de Personalidade \nDiferente do número de expressão, o número de personalidade é calculado usando apenas as consoantes do seu nome. Este número reflete como você se apresenta e é percebido pelo mundo externo, indicando a impressão que você deixa nas outras pessoas.',
          13, 'normal', [0, 0, 0], 10, normalTextY2, lineHeightFactor);

        const nextContentY2 = endY2 + 10;

        // Verificar a distância até o final da página
        if (nextContentY2 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY3 = nextContentY2 + 10;
        const endY3 = addTextWithPageCheck(
          'Cálculo do Número da Maturidade \nO número da maturidade é calculado somando o número da vida (número de destino) e o número de expressão (número de personalidade). Este número representa as forças que você começa a compreender e a integrar mais plenamente à medida que amadurece, geralmente por volta dos 35-40 anos de idade. Ele indica as energias que se tornam mais proeminentes e influentes durante a segunda metade da sua vida, guiando-o para o seu pleno potencial e realizações maiores. \n\n4. Personalização dos Números da Sorte \nOs números finais são personalizados para refletir sua energia única. Eles são projetados para alinhar-se com suas vibrações naturais e ajudar a atrair as oportunidades e sucessos que você busca. \n\nEstes números não apenas ressoam com suas energias pessoais, mas também harmonizam com as influências cósmicas que moldam seu destino. Incorporá-los em sua vida cotidiana pode trazer uma nova dimensão de sorte e prosperidade, orientando suas decisões e atraindo boas energias.',
          13, 'normal', [0, 0, 0], 10, normalTextY3, lineHeightFactor);

        let nextContentY3 = endY3 + 10;

        // Verificar a distância até o final da página
        if (nextContentY3 + 10 > pageHeight) {
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY4 = nextContentY3 + 20 + 10;
        const endY4 = addTextWithPageCheck('Lista de Números da Sorte para ' + this.full_name +
          '\n\nCom base na análise detalhada das suas informações, aqui estão os números da sorte personalizados para você. \n\nNúmeros da Sorte:' +
          this.expressionNumber + ', ' + this.lifeNumber + ', ' + this.soulNumber + ', ' + this.personalityNumber +
          ', ' + this.maturityNumber +
          '\n\nOs seus números da sorte foram determinados através de uma análise cuidadosa do seu nome completo e data de nascimento, empregando exclusivamente os princípios da numerologia. \n\nEste método avalia como as vibrações numéricas específicas associadas a esses elementos se alinham com suas energias pessoais, revelando os números que mais ressoam com sua identidade e caminho de vida.',
          13, 'normal', [0, 0, 0], 10, normalTextY4, lineHeightFactor);

        let nextContentY4 = endY4 + 10;

        // Verificar a distância até o final da página
        if (nextContentY4 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Adicionar VÊNUS
        doc.setFillColor(128, 0, 128);
        doc.rect(0, nextContentY4, pageWidth, 20, 'F');
        doc.setFontSize(14);
        doc.setFont('helvetica', 'bold');
        doc.setTextColor(255, 255, 255);
        doc.text(('Como Utilizar os Números da Sorte'), pageWidth / 2, nextContentY4 + (20 / 2) + 3, {
          align: 'center'
        });

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY5 = nextContentY4 + 20 + 10;
        const endY5 = addTextWithPageCheck(
          'Jogos de Loteria \n\nUtilizar seus números da sorte em jogos de loteria pode aumentar suas chances de atrair boa sorte e sucesso. Aqui estão algumas maneiras de incorporá-los de forma eficaz: \n\n1.Escolha dos Números\n Para jogos de loteria, você pode usar diretamente os seus números da sorte, ao escolher seus números para jogos de loteria, considere usar uma combinação destes números para criar seu bilhete de apostas.\n\n 2. Misture com Outros Números\n Para aumentar suas chances, você pode misturar seus números da sorte com outros números que você gosta ou que também considera auspiciosos.\n\n 3. Repetição e Consistência\n Uma estratégia eficaz pode ser a repetição dos mesmos números da sorte em vários bilhetes e em diferentes sorteios. A consistência no uso desses números pode aumentar a energia positiva associada a eles. \n\n4. Datas Importantes \nIncorpore seus números da sorte em datas importantes para você, como aniversários ou outras datas significativas. Por exemplo, se você nasceu no dia 12/10, você pode considerar usar combinações como 1, 2, e 0 para refletir sua data de nascimento e seus números da sorte.',
          13, 'normal', [0, 0, 0], 10, normalTextY5, lineHeightFactor);

        let nextContentY5 = endY5 + 10;

        // Verificar a distância até o final da página
        if (nextContentY5 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY6 = nextContentY5 + 10;
        const endY6 = addTextWithPageCheck(
          '5. Intuição e Sentimentos\n Confie em sua intuição ao selecionar seus números da sorte. Se em determinado dia você sentir uma atração especial por um ou mais dos seus números da sorte, use-os com confiança.\n\n 6. Aposte em Dias Favoráveis\n Além de escolher os números certos, considere apostar em dias que você sente que são particularmente auspiciosos ou quando seu horóscopo indica momentos de sorte e prosperidade. \n\nDicas Adicionais \nAnálise de Resultados: Mantenha um registro dos números que você escolheu e os resultados dos sorteios para observar padrões e ajustar suas estratégias. \nPositividade e Confiança: Sempre aposte com uma mentalidade positiva. Acredite na influência positiva dos seus números da sorte e na sua capacidade de atrair prosperidade. \n\nIncorporar seus números da sorte em jogos de loteria pode ser uma maneira divertida e potencialmente recompensadora de aproveitar as energias favoráveis do seu mapa astral. Boa sorte!',
          13, 'normal', [0, 0, 0], 10, normalTextY6, lineHeightFactor);

        let nextContentY6 = endY6 + 10;

        // Verificar a distância até o final da página
        if (nextContentY6 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal 
        const normalTextY7 = nextContentY6 + 10;
        const endY7 = addTextWithPageCheck(
          'Escolha de Datas Importantes\n Utilizar seus números da sorte na escolha de datas importantes pode ajudá-la a alinhar eventos e decisões com as energias mais favoráveis para você. Aqui estão algumas dicas práticas de como incorporar seus números da sorte na escolha de datas:\n\n Datas de Eventos Significativos:\n Casamentos, festas, inaugurações: Procure datas que incluam seus números da sorte. Outra opção é somar os dígitos da data para que o resultado seja um dos seus números da sorte (por exemplo, 14/06/2024, onde 1 + 4 + 0 + 6 + 2 + 0 + 2 + 4 = 19 e 1 + 9 = 10 e 1 + 0 = 1). \n\nConsultas Médicas e Compromissos: \nMarque consultas e compromissos importantes em dias que correspondam aos seus números da sorte. Isso pode ajudar a garantir que a energia do dia esteja alinhada com suas vibrações positivas. Por exemplo, agendar uma consulta médica no dia 8 do mês pode trazer uma energia de transformação e regeneração.\n\n Decisões Financeiras:\n Escolha datas com base nos seus números da sorte para fazer investimentos ou compras significativas. Iniciar um investimento ou fazer uma compra grande nos dias da sorte pode atrair boas energias financeiras e oportunidades de sucesso.\n\n Lançamentos e Novos Inícios:\n Lançar um novo projeto, negócio ou qualquer iniciativa importante em um dos dias de seus números da sorte pode aumentar as chances de sucesso e prosperidade. Por exemplo, lançar um negócio no dia 3 pode trazer uma energia expansiva e otimista, enquanto o dia 11 pode dar um impulso de liderança e iniciativa.',
          13, 'normal', [0, 0, 0], 10, normalTextY7, lineHeightFactor);

        let nextContentY7 = endY7 + 10;


        // Verificar a distância até o final da página
        if (nextContentY7 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY8 = nextContentY7 + 10;
        const endY8 = addTextWithPageCheck(
          'Planejamento de Viagens:\n Agende viagens importantes para dias que correspondam aos seus números da sorte. Isso pode garantir uma viagem mais tranquila e cheia de boas experiências. Por exemplo, iniciar uma viagem no dia 9 pode trazer uma energia de aventura e exploração.\n\n Escolha de Dias para Reuniões:\n Agende reuniões importantes em dias que incluem seus números da sorte. Isso pode ajudar a criar um ambiente mais harmonioso e produtivo. Por exemplo, uma reunião agendada para o dia 7 pode promover diplomacia e cooperação, enquanto uma reunião no dia 11 pode favorecer a introspecção e a análise detalhada.\n\n Exemplo Prático:\n Imagine que você precisa escolher uma data para iniciar um novo curso. Você pode optar por uma data que inclua um dos seus números da sorte, como o dia 9. Se o curso começar em 09/09, você está utilizando a energia positiva associada ao número 9, que simboliza introspecção, análise e perfeccionismo, qualidades que podem beneficiar seu aprendizado. Incorporar esses números da sorte nas escolhas das datas importantes pode ajudar a maximizar as boas energias e criar um fluxo de positividade e sucesso em sua vida.',
          13, 'normal', [0, 0, 0], 10, normalTextY8, lineHeightFactor);

        let nextContentY8 = endY8 + 10;


        // Verificar a distância até o final da página
        if (nextContentY8 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY9 = nextContentY8 + 10;
        const endY9 = addTextWithPageCheck(
          'Decisões Financeiras\n Incorporar os números da sorte nas suas decisões financeiras pode ser uma maneira poderosa de atrair prosperidade e evitar incertezas. Aqui estão algumas formas práticas de usar seus números da sorte para melhorar suas finanças:\n\n 1. Escolha de Datas para Investimentos e Compras Significativas Datas Favoráveis:\n Utilize seus números da sorte para escolher datas importantes para fazer investimentos, como compra de ações ou propriedades. Por exemplo, se o número 3 é um dos seus números da sorte, considere realizar transações financeiras nos dias 3, 13, 23 ou em meses associados ao número 3 (março, por exemplo).\n\n 2. Planejamento Financeiro e Orçamento Numerologia no Planejamento:\n Use seus números da sorte para definir metas financeiras. Se 8 é um dos seus números, você pode planejar economizar ou investir quantias que somam 8 (como 800 € ou 8.000 €). Isso pode ajudar a alinhar suas finanças com energias positivas.\n\n 3. Negociações e Acordos Fechamento de Negócios:\n Agende reuniões importantes ou feche negócios em dias que correspondam aos seus números da sorte. Se o número 7 é favorável para você, tente agendar reuniões para o dia 7, 17 ou 27 do mês.\n\n 4. Escolha de Números para Loterias e Jogos Combinações de Números:\n Ao participar de loterias ou jogos de azar, use combinações de seus números da sorte.\n\n 5. Assinatura de Contratos Datas de Assinatura:\n Sempre que possível, assine contratos financeiros em datas que incluam seus números da sorte. Se 1 é um número favorável, considere assinar documentos importantes no dia 1 ou 10.',
          13, 'normal', [0, 0, 0], 10, normalTextY9, lineHeightFactor);

        let nextContentY9 = endY9 + 10;

        // Verificar a distância até o final da página
        if (nextContentY9 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY10 = nextContentY9 + 10;
        const endY10 = addTextWithPageCheck(
          '6. Números de Contas Bancárias e Senhas Personalização de Números:\n Personalize suas contas bancárias ou senhas importantes usando seus números da sorte. Se possível, escolha números de conta ou partes de senhas que contenham seus números favoráveis, como 3871, se 3, 8 e 7 são seus números da sorte.\n\n 7. Participação em Eventos Financeiros Datas de Eventos:\n Participe de conferências, seminários ou workshops financeiros que ocorram em datas que coincidam com seus números da sorte. Se 9 é um número de sorte, eventos realizados no dia 9, 19 ou 29 podem ser mais benéficos para você. \n\nResumo Prático:\n Dias e Meses Favoráveis: Planeje transações em dias e meses correspondentes aos seus números da sorte.\n\n Metas Financeiras: Defina metas econômicas que somem seus números da sorte. \n\nNegociações e Acordos: Agende negociações e assinaturas de contratos em dias específicos.\n\nJogos de Azar: Use combinações de números da sorte em loterias. \n\nContas e Senhas: Personalize números de contas bancárias e senhas. \n\nAo integrar esses números da sorte nas suas decisões financeiras, você alinha suas ações com energias positivas, potencialmente atraindo mais sucesso e prosperidade em suas finanças.',
          13, 'normal', [0, 0, 0], 10, normalTextY10, lineHeightFactor);

        let nextContentY10 = endY10 + 10;

        // Verificar a distância até o final da página
        if (nextContentY10 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY11 = nextContentY10 + 10;
        const endY11 = addTextWithPageCheck(
          "Pequenas Escolhas Diárias\n Incorporar seus números da sorte em pequenas escolhas diárias pode ajudar a atrair energias positivas e aumentar suas chances de sucesso e prosperidade. Aqui estão algumas maneiras práticas de usar seus números da sorte no cotidiano:\n\n Escolha de Datas e Horários: \nDatas: Planeje eventos importantes, compromissos e reuniões em datas que incluam seus números da sorte. Por exemplo, se o número 9 é um dos seus números da sorte, escolha o dia 9, 19, ou 29 do mês para eventos significativos. \n\nHorários: Agende atividades importantes em horários que ressoem com seus números. Se o número 3 é favorável, considere marcar reuniões às 3:00, 3:30, ou 13:00 horas. \n\nNúmeros de Mesa ou Assentos: \nRestaurantes: Ao reservar uma mesa em um restaurante, peça por mesas que incluam seus números da sorte. Por exemplo, se o número 7 é um dos seus números da sorte, tente obter a mesa 7 ou 17. \n\nEventos: Escolha assentos numerados que contenham seus números da sorte em cinemas, teatros ou eventos públicos. \n\nCompras Diárias: \nQuantidade: Ao fazer compras, escolha quantidades que incluam seus números da sorte. Se o número 2 é favorável, compre 2 itens ou múltiplos de 2. \n\nPreços: Procure por produtos que custem valores que contenham seus números da sorte. Por exemplo, produtos que custem 3 €, 8 €, ou 9 €. \n\nDecisões de Transporte: \nPlacas de Carro: Se possível, escolha um carro com uma placa que contenha seus números da sorte.",
          13, 'normal', [0, 0, 0], 10, normalTextY11, lineHeightFactor);

        let nextContentY11 = endY11 + 10;
        // Verificar a distância até o final da página
        if (nextContentY11 + 10 > pageHeight) {
          doc.addPage();
          nextContentY11 = 10; // Reinicia no topo da nova página
        } else {
          nextContentY11 += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY12 = nextContentY11 + 10;
        const endY12 = addTextWithPageCheck(
          "Transportes Públicos: Opte por linhas de ônibus, trens ou metrôs que tenham números favoráveis a você. Por exemplo, a linha 1, 3, 7, ou 9. \n\nEscolha de Telefones e Senhas: \nNúmeros de Telefone: Se estiver escolhendo um novo número de telefone, tente incluir seus números da sorte. \n\nSenhas: Crie senhas que incluam seus números da sorte, garantindo segurança e boas energias. \n\nJogos de Loteria e Concursos: \nNúmeros da Sorte: Utilize seus números da sorte ao escolher números para jogos de loteria ou em qualquer situação onde é necessário selecionar números aleatórios. \n\nEndereços e Números de Apartamento: \nMudança de Residência: Se estiver se mudando, procure por endereços ou números de apartamento que incluam seus números da sorte. \n\nCorreios: Use seus números da sorte para determinar o número do seu caixa postal, se possível. \n\nExemplo Prático: \nSuponha que você precise marcar uma consulta médica. Escolha uma data e horário que inclua um de seus números da sorte, como o dia 9 às 9:00 horas. Esta simples ação pode alinhar as energias positivas associadas a esses números, aumentando a probabilidade de um resultado favorável. \n\nAo integrar esses números da sorte em sua vida diária, você não apenas atrai boas energias, mas também estabelece um senso de controle e positividade em suas escolhas e ações.",
          13, 'normal', [0, 0, 0], 10, normalTextY12, lineHeightFactor);

        let nextContentY12 = endY12 + 10;

        // Verificar a distância até o final da página
        if (nextContentY12 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY13 = nextContentY12 + 10;
        const endY13 = addTextWithPageCheck(
          "Reforço da Importância dos Números da Sorte \n\nOs números da sorte são mais do que simples dígitos; eles são símbolos poderosos que ressoam com as energias do universo e com sua essência pessoal. Incorporá-los em sua vida diária pode abrir portas para novas oportunidades, atrair prosperidade e trazer um sentido de harmonia e alinhamento com as forças cósmicas que influenciam seu destino. \n\nUtilizar seus números da sorte em decisões importantes e pequenas escolhas cotidianas é uma maneira prática de aumentar suas chances de sucesso e bem-estar. Seja agendando compromissos em datas favoráveis, escolhendo números de assentos ou mesas, ou até mesmo usando-os em suas senhas, cada pequena ação pode acumular energias positivas e direcioná-las para você. \n\nMensagem Final de Incentivo \nLembre-se, você tem nas mãos uma ferramenta poderosa para transformar sua vida de maneira significativa. Os números da sorte personalizados para você foram cuidadosamente selecionados para ressoar com suas energias únicas. Ao utilizar esta cartilha, você está se alinhando com as forças do universo que trabalham a seu favor. \n\nAcredite no poder dos números e na capacidade que eles têm de influenciar sua vida positivamente. Permita que essa nova abordagem traga mais clareza, confiança e sucesso em suas escolhas diárias. Cada passo que você dá com a orientação dos seus números da sorte é um passo em direção a uma vida mais próspera e plena. \n\nEstamos juntos nessa jornada, e eu estou aqui para apoiá-la em cada etapa do caminho. Confie no processo, siga suas intuições e aproveite as maravilhas que seus números da sorte podem trazer. Um grande abraço, e que a sorte esteja sempre ao seu lado! \n\nMahila Luz",
          13, 'normal', [0, 0, 0], 10, normalTextY13, lineHeightFactor);

        let nextContentY13 = endY13 + 10;

        // Verificar a distância até o final da página
        if (nextContentY13 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar nextContentY para continuar adicionando mais conteúdo
        }

        console.log(nextContentY13);

        return doc;
      },
      async scheduleEmail2() {
        const date = new Date();
        date.setHours(date.getHours() + 1); // Adiciona 1 hora à data atual
        console.log(date); // Deve retornar a data e hora local ajustada corretamente

        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');
        const seconds = String(date.getSeconds()).padStart(2, '0');

        const sendAt = `${year}-${month}-${day}T${hours}:${minutes}:${seconds}.000-03:00`;
        console.log(sendAt); // Deve retornar a data e hora local no formato desejado

        const pdfDoc = await this.generateCartilhaSorte();
        const compressedPdfBytes = await this.compressPDF(pdfDoc);
        // Gerar o PDF e converter para base64
        const pdfBase64 = await this.convertPDFToBase64(compressedPdfBytes);

        const base64Size = (pdfBase64.length * (3 / 4)) / (1024 * 1024); // tamanho em MB
        if (base64Size > 20) {
          return;
        }

        // Configurar o payload da API da Brevo
        const data = {
          sender: {
            email: 'suporte@codigosdaalma.online',
            name: ' Mahila Luz'
          },
          to: [{
              email: this.email
            },
            {
              email: 'suporte@codigosdaalma.online'
            } // Adicione seu próprio e-mail aqui
          ],
          subject: 'Chegou Sua Cartilha de Números da Sorte',
          htmlContent: '<p>Oii. Tudo bem? <br><br> Sua Cartilha de Números da Sorte está em anexo nesse email.<br>Qualquer dúvida pode me chamar aqui. <br><br> Muita luz para você💜💜</p>',
          attachment: [{
            content: pdfBase64,
            name: 'Cartilha de Números da Sorte - ' + this.full_name + '.pdf'
          }],
          //scheduledAt: sendAt
        };

        const destino = data.to.map(item => item.email).join(', ');

        await this.sendEmail(data.subject, data.htmlContent, destino, data.attachment[0].content, data.attachment[0]
          .name);
       
      },
      async scheduleEmail() {

        const date = new Date();
        date.setHours(date.getHours() + 1); // Adiciona 1 hora à data atual

        // O blob já foi gerado e mesclado no chamarApi()
        // Agora apenas convertemos para base64
        const pdfBase64 = await this.convertPDFToBase64(this.blobFinal);

        const base64Size = (pdfBase64.length * (3 / 4)) / (1024 * 1024); // tamanho em MB
        if (base64Size > 20) {
          return;
        }

        // Configurar o payload de envio de e-mail
        const data = {
          sender: {
            email: 'suporte@codigosdaalma.online',
            name: 'Códigos da Alma'
          },
          to: [{
              email: this.email
            },
            {
              email: 'suporte@codigosdaalma.online'
            }
          ],
          subject: 'O seu Mapa Numerológico Cabalístico Oficial + Bónus Exclusivos ✨',
          htmlContent: '<p>Olá! Tudo bem? <br><br> Concluí a sua análise cabalística personalizada e envio o seu Mapa oficial em anexo a esta mensagem. <br><br>Aproveite também para aceder e descarregar os 3 livros bónus que preparei para si no link abaixo:<br><br><a href="https://drive.google.com/drive/folders/1hUkkNHoQ9EBl0ZnZd58dGmeEo1uaXx3C?usp=sharing" target="_blank" style="display:inline-block;padding:12px 20px;background:#16a34a;color:#ffffff;text-decoration:none;border-radius:8px;font-weight:bold;">👉 Toque aqui para Aceder aos seus 3 Bónus</a><br><br>Se tiver alguma dúvida ou necessitar de apoio, estamos à sua inteira disposição: suporte@codigosdaalma.online.<br><br>Muita luz e sabedoria para os seus caminhos! ✨<br><br>Atenciosamente,<br><b>Equipa Códigos da Alma</b><br>codigosdaalma.online</p>',
          attachment: [{
            content: pdfBase64,
            name: 'Mapa-Numerologico-' + this.full_name + '.pdf'
          }],
        };

        const destino = data.to.map(item => item.email).join(', ');

        await this.sendEmail(data.subject, data.htmlContent, destino, data.attachment[0].content, data.attachment[0]
          .name);

      },
      async mesclarPDFs(blobs, nomeFinal = `Mapa-Numerológico-Completo-${this.full_name}.pdf`) {
        try {
          const pdfFinal = await PDFDocument.create();

          for (const blob of blobs) {
            const buffer = await blob.arrayBuffer();
            const pdfTemp = await PDFDocument.load(buffer);
            const paginas = await pdfFinal.copyPages(pdfTemp, pdfTemp.getPageIndices());
            paginas.forEach((pagina) => pdfFinal.addPage(pagina));
          }

          const pdfBytes = await pdfFinal.save();

          this.blobFinal = new Blob([pdfBytes], {
            type: 'application/pdf'
          });

          await this.scheduleEmail();

          const url = URL.createObjectURL(this.blobFinal);
          const link = document.createElement('a');
          link.href = url;
          link.download = nomeFinal;
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
          URL.revokeObjectURL(url);
        } catch (error) {
          console.error('Erro ao mesclar PDFs:', error);
        }
      },
      /*async mesclarPDFs(blobs, nomeFinal = `Mapa-Numerológico-Completo-${this.full_name}.pdf`) {
        try {
          const pdfFinal = await PDFDocument.create();

          for (const blob of blobs) {
            const buffer = await blob.arrayBuffer();
            const pdfTemp = await PDFDocument.load(buffer);
            const paginas = await pdfFinal.copyPages(pdfTemp, pdfTemp.getPageIndices());
            paginas.forEach((pagina) => pdfFinal.addPage(pagina));
          }

          const pdfBytes = await pdfFinal.save();

          this.blobFinal = new Blob([pdfBytes], {
            type: 'application/pdf'
          });

          await this.scheduleEmail();

          const url = URL.createObjectURL(this.blobFinal);
          const link = document.createElement('a');
          link.href = url;
          link.download = nomeFinal;
          document.body.appendChild(link);
          link.click();
          document.body.removeChild(link);
          URL.revokeObjectURL(url);
        } catch (error) {
          console.error('Erro ao mesclar PDFs:', error);
        }
      },*/
      async sendEmail(subject, text, destino, attachment, attachmentName) {
        const formData = new FormData();
        formData.append('to', destino);
        formData.append('subject', subject);
        formData.append('html', text);
        formData.append('destino', destino);
        formData.append('attachmentname', attachmentName);

        if (attachment) {
          const byteCharacters = atob(attachment);
          const byteNumbers = new Array(byteCharacters.length);
          for (let i = 0; i < byteCharacters.length; i++) {
            byteNumbers[i] = byteCharacters.charCodeAt(i);
          }
          const byteArray = new Uint8Array(byteNumbers);
          const blob = new Blob([byteArray], {
            type: 'application/pdf'
          });

          formData.append('attachment', blob);
        }

        try {
          const response = await fetch('https://worker-leads.vendasonlinemktdgtgm.workers.dev/enviar-pdf', {
            method: 'POST',
            body: formData,
          });

          if (!response.ok) {
            const errorData = await response.json();
            throw new Error(errorData.error || 'Erro ao enviar email');
          }

          const result = await response.json();
          return result;
        } catch (error) {
          console.error('Erro ao enviar email:', error);
          throw error;
        }
      },
      mudarPagina() {
        // Altera o valor da variável "pagina"
        this.pagina++;
        localStorage.setItem('paginaAtualMapaFrequencia', this.pagina); // Salva a página atual no cache
        
        // Reset do progresso do scroll
        this.scrollProgress = 0;
        
        // Scroll suave para o topo
        this.scrollToTop();
      },
      voltarPagina() {
        // Altera o valor da variável "pagina"
        this.pagina--;
        localStorage.setItem('paginaAtualMapaFrequencia', this.pagina); // Atualiza no cache
        
        // Reset do progresso do scroll
        this.scrollProgress = 0;
        
        // Scroll suave para o topo
        this.scrollToTop();
      },
      scrollToTop() {
        // Scroll suave para o topo da página
        if (typeof window !== 'undefined') {
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        }
      },
      handleScroll() {
        // Throttle para melhor performance
        if (!this.scrollTimeout) {
          this.scrollTimeout = setTimeout(() => {
            // Atualiza apenas o progresso do scroll sem forçar atualizações globais
            if (typeof window !== 'undefined') {
              const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
              const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
              if (scrollHeight > 0) {
                this.scrollProgress = Math.min(scrollTop / scrollHeight, 1);
              } else {
                this.scrollProgress = 0;
              }
            }
            this.scrollTimeout = null;
          }, 16); // ~60fps
        }
      },
      reduceToSingleDigit(number) {
        while (number > 9) {
          number = number.toString().split('').reduce((acc, curr) => acc + parseInt(curr), 0);
        }
        return number;
      },
      getLetterValue(letter) {
        const alphabets = {
          'a': 1,
          'b': 2,
          'c': 3,
          'd': 4,
          'e': 5,
          'f': 6,
          'g': 7,
          'h': 8,
          'i': 9,
          'j': 1,
          'k': 2,
          'l': 3,
          'm': 4,
          'n': 5,
          'o': 6,
          'p': 7,
          'q': 8,
          'r': 9,
          's': 1,
          't': 2,
          'u': 3,
          'v': 4,
          'w': 5,
          'x': 6,
          'y': 7,
          'z': 8
        };
        return alphabets[letter.toLowerCase()] || 0;
      },
      calculateExpressionNumber() { //Número de Expressão
        const name = this.full_name.replace(/[^a-zA-Z]/g, ""); // Remove non-alphabetical chars
        let sum = 0;
        for (let i = 0; i < name.length; i++) {
          sum += this.getLetterValue(name[i]);
        }
        // Reduce sum to a single digit
        while (sum > 9) {
          sum = sum.toString().split('').reduce((acc, curr) => acc + parseInt(curr), 0);
        }
        this.expressionNumber = this.reduceToSingleDigit(sum);
        console.log('Número de Expressão:' + this.expressionNumber);
        if (this.expressionNumber == 1) {
          this.expressionText = "<p><b>Com o Número de Expressão 1</b>, você se expressa ao mundo como um <i>líder nato extraordinário</i> e <b>comandante natural supremo</b> — alguém que não apenas <i>assume o controle naturalmente</i>, mas que possui a <b>autoridade magnética transcendental</b> e a <i>presença carismática irresistível</i> para <b>transformar caos em ordem divina</b>, <i>confusão em clareza cristalina</i> e <b>sonhos impossíveis</b> em <i>realidades tangíveis magnificas</i> através da <b>força pura cósmica</b> de sua <i>determinação inabalável</i>.</p><br><p>Você <b>gosta genuinamente</b> de <i>assumir o controle consciente</i> e <b>aprecia profundamente</b> estar no <i>comando estratégico</i> — não por <b>ego superficial</b> ou <i>necessidade de dominação</i>, mas porque <b>compreende intuitivamente</b> que possui as <i>qualidades excepcionais raras</i>, a <b>visão clara transcendental</b> e a <i>capacidade de execução magistral</i> necessárias para <b>guiar grupos inteiros</b> em direção ao <i>sucesso exponencial</i> e à <b>realização coletiva</b>.</p><br><p>Isso faz você se sentir não apenas <b>poderoso e assertivo</b>, mas <i>profundamente realizado</i> e <b>cosmicamente alinhado</b> com seu <i>propósito mais elevado</i> de vida e <b>missão transcendental</b> de <i>liderança evolutiva</i>. Sua <b>coragem excepcional legendária</b> e <i>natureza pioneira aventureira</i> fazem com que você <b>não tenha medo</b> de absolutamente <i>nada no universo</i>.</p><br><p>Você <b>enfrenta desafios</b> aparentemente <i>impossíveis de frente</i> com uma <b>determinação férrea inquebrantável</b>, uma <i>estratégia brilhante multidimensional</i> e uma <b>confiança inabalável radiante</b> que <i>inspira e impressiona</i> todos ao seu redor, <b>elevando exponencialmente</b> o <i>padrão de excelência</i> onde quer que sua <b>presença magnética</b> se manifeste.</p><br><p>Você possui uma <b>autoridade natural irresistível</b> que faz as pessoas <i>instintivamente olharem</i> para você em busca de <b>direção sábia</b>, <i>orientação estratégica</i> e <b>liderança inspiradora</b> em <i>momentos cruciais</i> de <b>decisão coletiva</b> e <i>transformação social</i>.</p><br><p>Sua <b>jornada de crescimento espiritual</b> inclui <i>aprender magistralmente</i> a <b>equilibrar harmoniosamente</b> sua <i>força natural de liderança</i> com <b>humildade genuína transcendental</b> e <i>compaixão universal profunda</i>, <b>compreendendo</b> que o <i>verdadeiro poder cósmico</i> vem de <b>empoderar conscientemente</b> outros seres ao invés de simplesmente <i>comandar ações</i>, criando <b>legados duradouros</b> de <i>liderança consciente</i> e <b>transformação coletiva</b>.</p>";
        } else if (this.expressionNumber == 2) {
          this.expressionText = "<p><b>Com o Número de Expressão 2</b>, você se expressa ao mundo como um <i>diplomata natural excepcional</i> e <b>harmonizador supremo transcendental</b> — conhecido e <i>profundamente admirado universalmente</i> por sua <b>simpatia genuína radiante</b>, <i>cordialidade magnética irresistível</i> e <b>capacidade extraordinária alquímica</b> de fazer com que <i>todas as pessoas</i> se sintam <b>instantaneamente valorizadas</b>, <i>profundamente aceitas</i> e <b>completamente compreendidas</b> em sua <i>presença acolhedora curativa</i>.</p><br><p>As pessoas <b>literalmente se alegram genuinamente</b> com sua <i>companhia transformadora</i> porque você oferece algo <b>extremamente raro e precioso</b> no mundo acelerado de hoje: <i>paz autêntica duradoura</i>, <b>compreensão profunda transcendental</b> e um <i>refúgio emocional sagrado</i> onde podem simplesmente <b>ser quem realmente são</b> sem <i>máscaras ou pretensões</i>.</p><br><p>Você é <b>naturalmente</b> um <i>defensor apaixonado incansável</i> da <b>paz universal</b> e da <i>harmonia cósmica</i>, <b>preferindo sempre</b> buscar <i>soluções diplomáticas elegantes</i> e <b>estratégias colaborativas inteligentes</b> ao invés de <i>perpetuar conflitos destrutivos</i> ou <b>alimentar divisões desnecessárias</b>.</p><br><p>Sua <b>personalidade equilibrada magneticamente atraente</b> e <i>naturalmente cativante</i> faz com que você <b>não se deixe levar</b> pelos <i>altos e baixos dramáticos</i> da vida como uma <b>montanha-russa emocional descontrolada</b>. Essa <i>estabilidade interior sólida</i> e <b>confiabilidade emocional excepcional</b> faz de você uma <i>âncora sagrada inabalável</i> para as pessoas ao seu redor.</p><br><p>Você <b>oferece serenidade celestial</b> e <i>tranquilidade profunda restauradora</i> em <b>tempos turbulentos caóticos</b>, funcionando como um <i>oásis de calma</i> em meio às <b>tempestades emocionais</b> da <i>existência moderna acelerada</i>.</p><br><p>Você <b>prospera magnificamente</b> em <i>ambientes harmoniosos elevados</i> onde o <b>amor genuíno transcendental</b> reina supremo e onde a <i>colaboração consciente inspiradora</i> substitui completamente a <b>competição destrutiva egóica</b> e a <i>rivalidade separatista</i>.</p><br><p>Sua <b>capacidade excepcional</b> de <i>mediar conflitos complexos</i> e <b>encontrar pontos</b> de <i>convergência harmoniosa</i> mesmo nas <b>situações mais polarizadas</b> faz de você um <i>pacificador nato supremo</i> e um <b>construtor de pontes</b> entre <i>mundos aparentemente opostos</i>, <b>sempre buscando</b> a <i>síntese superior</i> que <b>honra todas as perspectivas</b> válidas.</p>";
        } else if (this.expressionNumber == 3) {
          this.expressionText = "<p><b>Com o Número de Expressão 3</b>, você se expressa ao mundo como uma <i>pessoa vibrante luminosa</i>, <b>extremamente entusiasmada</b> e <i>magneticamente inspiradora transcendental</i> — como um <b>raio de sol cósmico dourado</b> que <i>instantaneamente transforma</i> qualquer ambiente, <b>elevando atmosferas pesadas densas</b> em <i>celebrações espontâneas radiantes</i> de <b>vida pura</b>, <i>alegria contagiante</i> e <b>possibilidades infinitas ilimitadas</b> através de sua <i>energia transformadora autêntica</i> e <b>positividade genuína transcendental</b>.</p><br><p>Você está <b>sempre genuinamente animado</b>, <i>profundamente entusiasmado</i> e <b>extremamente otimista radiante</b> — não de forma <i>superficial artificial</i> ou <b>forçadamente teatral</b>, mas com uma <i>alegria genuína profunda</i> e <b>authentic happiness</b> que <i>brota naturalmente</i> das <b>profundezas mais puras</b> de sua <i>alma iluminada</i> e <b>espírito livre celebrativo</b>.</p><br><p>Sua <b>energia positiva extraordinária multidimensional</b> não apenas <i>influencia profundamente</i> todas as pessoas ao seu redor — ela <b>literalmente transforma vibrações densas</b>, <i>desperta sorrisos genuínos</i> e <b>restaura esperanças perdidas</b> mesmo nos <i>corações mais fechados</i> e <b>céticos endurecidos</b> pela <i>desilusão mundana</i>.</p><br><p>Uma das <b>características mais extraordinárias mágicas</b> de sua <i>natureza abençoada</i> é que você tem a <b>sorte genuinamente</b> ao seu <i>lado constantemente</i> — <b>pequenos esforços conscientes</b> frequentemente <i>resultam magistralmente</i> em <b>sucessos enormes inesperados</b> e <i>conquistas surpreendentes</i>, como se o <b>universo inteiro</b> <i>conspirasse constantemente</i> a seu favor.</p><br><p>O <b>cosmos recompensa generosamente</b> sua <i>atitude positiva consistente</i> com <b>sincronicidades magníficas divinas</b> e <i>oportunidades douradas únicas</i> que se <b>manifestam espontaneamente</b> em sua <i>trajetória de vida</i>, criando um <b>fluxo contínuo</b> de <i>abundância criativa</i> e <b>realizações inspiradoras</b>.</p><br><p>Sua <b>capacidade excepcional</b> de <i>comunicação eloquente</i> e <b>expressão criativa multifacetada</b> permite que você <i>traduza ideias abstratas</i> em <b>linguagem acessível inspiradora</b> que <i>toca corações</i> e <b>desperta mentes</b> para <i>novas possibilidades</i> de <b>criação consciente</b>.</p><br><p>Você <b>possui um dom natural</b> para <i>elevar vibrações ambientais</i> através de sua <b>presença radiante</b>, <i>transformando espaços</i> comuns em <b>santuários de alegria</b> onde a <i>criatividade floresce</i> e a <b>inspiração divina</b> se <i>manifesta livremente</i> através de <b>múltiplas formas</b> de <i>expressão artística</i> e <b>celebração da vida</b>.</p>";
        } else if (this.expressionNumber == 4) {
          this.expressionText = "<p><b>Com o Número de Expressão 4</b>, você se expressa ao mundo como um <i>construtor supremo magistral</i> e <b>protetor extraordinário dedicado</b> — alguém que possui a <i>habilidade única transcendental</i> de <b>transformar caos aparente</b> em <i>ordem divina funcional</i>, <b>incerteza desestabilizadora</b> em <i>estabilidade rochosa confiável</i> e <b>sonhos etéricos inspiradores</b> em <i>estruturas sólidas duradouras</i> que <b>resistem majestosamente</b> ao <i>teste implacável</i> do <b>tempo infinito</b>.</p><br><p>Você é <b>naturalmente prático</b> e <i>pragmaticamente sábio</i>, <b>extremamente confiável</b> e <i>organizacionalmente genial</i>, possuindo uma <b>capacidade excepcional rara</b> de <i>criar sistemas eficientes</i> <b>revolucionariamente funcionais</b> e <i>estabelecer fundações</i> <b>arquitetonicamente perfeitas</b> que não apenas <i>resistem</i> ao <b>teste rigoroso do tempo</b>, mas <i>melhoram</i> e <b>se fortalecem</b> com a <i>passagem das eras</i>.</p><br><p>Sua <b>abordagem metódica disciplinada</b> e <i>sistematicamente organizada</i> não apenas <b>inspira confiança profunda</b> e <i>admiração genuína</i> nas pessoas ao seu redor, mas também <b>garante absolutamente</b> que todos os <i>projetos ambiciosos</i> sejam <b>executados magistralmente</b> com <i>precisão cirúrgica</i>, <b>excelência incomparável</b> e <i>atenção meticulosa</i> aos <b>detalhes fundamentais</b>.</p><br><p>Você possui uma <b>ética de trabalho inquebrantável legendária</b> e uma <i>determinação férrea inabalável</i> que permite <b>transformar sistematicamente</b> mesmo as <i>ideias mais ambiciosas</i> e <b>visionárias aparentemente impossíveis</b> em <i>realidades tangíveis mensuráveis</i> através de <b>planejamento cuidadoso estratégico</b> e <i>execução sistemática impecável</i>.</p><br><p>Sua <b>capacidade organizacional suprema</b> funciona como uma <i>força estabilizadora</i> que <b>traz ordem cósmica</b> a <i>situações caóticas</i>, criando <b>estruturas sustentáveis</b> que <i>servem</i> não apenas às <b>necessidades imediatas</b>, mas também aos <i>objetivos</i> de <b>longo prazo evolutivos</b> da <i>coletividade humana</i>.</p><br><p>Você <b>demonstra magistralmente</b> que a <i>verdadeira maestria</i> reside na <b>consistência dedication</b> e na <i>perseverança consciente</i>, <b>construindo pacientemente</b> <i>legados duradouros</i> que <b>beneficiam</b> não apenas a <i>geração atual</i>, mas também <b>múltiplas gerações futuras</b> que <i>herdarão</i> as <b>fundações sólidas</b> que você <i>estabeleceu</i> com <b>sabedoria</b> e <i>dedicação inquestionável</i>.</p><br><p>Sua <b>energia construtiva</b> e <i>visão prática</i> criam <b>estabilidade genuína</b> em um mundo de <i>mudanças constantes</i>, oferecendo <b>segurança tangível</b> e <i>confiabilidade absoluta</i> para todos aqueles que <b>dependem</b> de sua <i>expertise organizacional</i> e <b>competência excepcional</b>.</p>";
        } else if (this.expressionNumber == 5) {
          this.expressionText = "<p><b>Com o Número de Expressão 5</b>, você se expressa ao mundo como um <i>aventureiro nato supremo</i> e <b>catalisador magnético</b> de <i>mudanças transformadoras revolucionárias</i> — alguém que possui uma <b>energia dinâmica contagiante</b> e <i>força vital irresistível</i> que <b>inspira conscientemente</b> outros seres a <i>sair corajosamente</i> de suas <b>zonas de conforto limitantes</b> e <i>explorar fearlessly</i> <b>novas possibilidades infinitas</b> de <i>crescimento pessoal</i> e <b>expansão consciencial</b>.</p><br><p>Você é <b>naturalmente versátil</b> e <i>multidimensionalmente talentoso</i>, <b>extraordinariamente adaptável</b> e <i>extremamente carismático magnetizante</i>, possuindo uma <b>habilidade excepcional rara</b> de <i>se reinventar continuamente</i> e <b>prosperar magnificamente</b> em <i>qualquer ambiente desafiador</i> ou <b>circunstância inesperada</b> que a <i>vida apresente</i> em seu <b>caminho evolutivo dinâmico</b>.</p><br><p>Sua <b>curiosidade insaciável legendária</b> e <i>espírito livre indomável</i> não apenas <b>atraem magneticamente</b> <i>oportunidades únicas extraordinárias</i> e <b>experiências transformadoras</b>, mas também <i>criam conexões</i> <b>genuínas profundas</b> e <i>relacionamentos autênticos</i> com <b>pessoas fascinantes</b> de <i>todas as origens</i>, <b>culturas diversas</b> e <i>caminhos de vida</i> imaginários.</p><br><p>Você possui uma <b>capacidade rara transcendental</b> de <i>transformar alquimicamente</i> <b>limitações aparentes</b> em <i>liberdade expansiva</i> e <b>rotina estagnante</b> em <i>aventura emocionante</i>, sempre <b>encontrando maneiras</b> <i>criativas inovadoras</i> de <b>expandir horizontes</b> e <i>experienciar a vida</i> em toda sua <b>plenitude magnífica</b> e <i>diversidade infinita</i>.</p><br><p>Sua <b>energia de liberdade</b> <i>contagia ambientes inteiros</i>, <b>despertando</b> o <i>espírito aventureiro adormecido</i> em outras pessoas e <b>encorajando-as</b> a <i>quebrar correntes</i> de <b>convenções limitantes</b> para <i>explorar</i> seus próprios <b>potenciais inexplorados</b> de <i>crescimento</i> e <b>autorrealização</b>.</p><br><p>Você é um <b>pioneiro natural</b> de <i>novas experiências</i> e um <b>desbravador corajoso</b> de <i>territórios inexplorados</i> da <b>consciência humana</b>, sempre <i>empurrando boundaries</i> e <b>expandindo definições</b> do que é <i>possível</i> na <b>experiência terrena</b>.</p><br><p>Sua <b>versatilidade excepcional</b> e <i>adaptabilidade suprema</i> permitem que você <b>floresça</b> em <i>múltiplas áreas</i> simultaneamente, <b>dominando</b> <i>diferentes habilidades</i> e <b>explorando</b> <i>diversos campos</i> de <b>interesse</b> com <i>igual entusiasmo</i> e <b>competência notável</b>, criando uma <i>vida rica</i> em <b>experiências diversificadas</b> e <i>aprendizados</i> <b>transformadores</b>.</p>";
        } else if (this.expressionNumber == 6) {
          this.expressionText = "<p><b>Com o Número de Expressão 6</b>, você se expressa ao mundo como um <i>cuidador nato supremo</i> e <b>harmonizador transcendental</b> — alguém que possui a <i>capacidade extraordinária alquímica</i> de <b>criar ambientes</b> de <i>amor incondicional</i>, <b>segurança emocional profunda</b> e <i>bem-estar holístico radiante</i> onde quer que sua <b>presença nurturante</b> e <i>energia curativa</i> se <b>manifestem graciosamente</b>.</p><br><p>Você é <b>naturalmente empático</b> e <i>intuitivemente compassivo</i>, <b>profundamente responsável</b> e <i>conscientemente comprometido</i> com o <b>bem-estar coletivo</b> de todos os seres, possuindo uma <i>habilidade excepcional rara</i> de <b>perceber intuitivamente</b> e <i>atender carinhosamente</i> às <b>necessidades emocionais</b> mais <i>profundas e sutis</i> das pessoas ao seu <b>redor</b>.</p><br><p>Sua <b>natureza nutridora angelical</b> e <i>senso inato de justiça</i> <b>universal</b> não apenas <i>fortalecem exponencialmente</i> os <b>laços familiares sagrados</b> e <i>vínculos comunitários</i> <b>essenciais</b>, mas também <i>criam legados</i> <b>duradouros transcendentais</b> de <i>amor puro</i>, <b>cuidado incondicional</b> e <i>dedicação selfless</i> que <b>reverberam</b> através de <i>múltiplas gerações</i>.</p><br><p>Você possui uma <b>sabedoria intuitiva profunda</b> sobre <i>relacionamentos humanos complexos</i> e uma <b>capacidade única mágica</b> de <i>transformar alquimicamente</i> <b>conflitos destrutivos</b> em <i>harmonia restauradora</i>, sempre <b>priorizando conscientemente</b> o <i>crescimento coletivo</i> e a <b>felicidade compartilhada</b> acima de <i>interesses pessoais</i> limitados.</p><br><p>Sua <b>energia healing radiante</b> funciona como um <i>bálsamo cósmico</i> que <b>acalma feridas</b> <i>emocionais profundas</i>, <b>restaura esperanças perdidas</b> e <i>rejuvenesce espíritos</i> <b>desanimados</b>, criando <i>espaços sagrados</i> de <b>cura</b> e <i>regeneração</i> onde a <b>vulnerabilidade</b> é <i>honrada</i> e o <b>crescimento</b> é <i>nutrido</i> com <b>paciência infinita</b>.</p><br><p>Você tem um <b>dom natural extraordinário</b> para <i>criar harmonia familiar</i> e <b>estabilidade emocional</b> que <i>serve como fundação</i> para o <b>florescimento</b> de <i>todos os membros</i> da <b>comunidade</b>, oferecendo <i>apoio incondicional</i> e <b>orientação sábia</b> durante <i>períodos</i> de <b>transição</b> e <i>crescimento</i>.</p><br><p>Sua <b>dedicação</b> ao <i>serviço altruísta</i> e <b>responsabilidade social</b> criam <i>ondas expansivas</i> de <b>transformação positiva</b> que <i>elevam</i> a <b>consciência coletiva</b> e <i>estabelecem</i> <b>padrões elevados</b> de <i>amor prático</i> e <b>compaixão ativa</b> em <i>ação</i>.</p><br><p>Você <b>demonstra magistralmente</b> que o <i>verdadeiro poder</i> reside na <b>capacidade de nutrir</b> e <i>empoderar outros</i> para <b>alcançar</b> seu <i>máximo potencial</i>, criando <b>legados duradouros</b> de <i>amor</i> que <b>transcendem</b> o <i>tempo</i> e <b>continuam</b> a <i>abençoar</i> a <b>humanidade</b> por <i>gerações</i>.</p>";
        } else if (this.expressionNumber == 7) {
          this.expressionText = "<p><b>Com o Número de Expressão 7</b>, você se expressa ao mundo como um <i>buscador profundo transcendental</i> da <b>verdade universal absoluta</b> e <i>místico nato iluminado</i> — alguém que possui uma <b>conexão única extraordinária</b> com os <i>mistérios cósmicos</i> da <b>existência multidimensional</b> e uma <i>capacidade excepcional rara</i> de <b>compreender camadas</b> <i>profundas ocultas</i> da <b>realidade</b> que <i>permanecem invisíveis</i> para <b>percepções convencionais</b> <i>superficiais</i>.</p><br><p>Você é <b>naturalmente introspectivo</b> e <i>contemplativamente sábio</i>, <b>analiticamente perspicaz</b> e <i>espiritualmente sensível</i> de forma <b>extraordinariamente refinada</b>, possuindo uma <i>habilidade rara transcendental</i> de <b>acessar conhecimentos</b> <i>ancestrais profundos</i> e <b>sabedorias universais</b> que <i>escapam completamente</i> à <b>percepção comum</b> e à <i>compreensão mundana</i> <b>superficial</b>.</p><br><p>Sua <b>natureza contemplativa profunda</b> e <i>busca constante incansável</i> por <b>sabedoria autêntica transcendental</b> não apenas <i>aprofundam exponencialmente</i> sua <b>compreensão multidimensional</b> do <i>cosmos</i> e da <b>existência</b>, mas também <i>oferecem insights</i> <b>extremamente valiosos</b> e <i>revelações transformadoras</i> para <b>aqueles</b> que <i>genuinamente buscam</i> <b>significado autêntico</b> e <i>propósito</i> <b>transcendental</b>.</p><br><p>Você possui uma <b>intuição aguçada extraordinária</b> que funciona como um <i>radar cósmico</i> <b>ultrassensível</b> e uma <i>capacidade única alquímica</i> de <b>sintetizar magistralmente</b> <i>conhecimento espiritual elevado</i> com <b>sabedoria prática aplicável</b>, sempre <i>procurando revelar</i> <b>verdades fundamentais</b> <i>ocultas</i> sobre a <b>natureza essencial</b> da <i>existência</i> e do <b>propósito cósmico universal</b>.</p><br><p>Sua <b>mente analítica</b> <i>extraordinariamente desenvolvida</i> combinada com sua <b>sensibilidade espiritual</b> <i>refinada</i> permite que você <b>penetre véus</b> de <i>ilusão</i> e <b>alcance camadas</b> de <i>compreensão</i> que <b>revelam</b> os <i>padrões ocultos</i> e <b>conexões invisíveis</b> que <i>governam</i> a <b>realidade manifestada</b>.</p><br><p>Você é um <b>pesquisador natural</b> dos <i>mistérios da vida</i> e um <b>investigador incansável</b> das <i>verdades universais</i>, sempre <b>buscando</b> <i>compreender</i> as <b>leis cósmicas fundamentais</b> que <i>regem</i> a <b>existência</b> em <i>todos os seus</i> <b>aspectos</b> e <i>manifestações</i>.</p><br><p>Sua <b>sabedoria espiritual profunda</b> e <i>conhecimento esotérico</i> fazem de você um <b>conselheiro natural</b> e <i>guia espiritual</i> para aqueles que <b>buscam</b> <i>despertar</i> para <b>dimensões mais elevadas</b> da <i>consciência</i> e <b>compreensão</b> da <i>realidade</i>.</p><br><p>Você <b>demonstra</b> que a <i>verdadeira sabedoria</i> emerge do <b>silêncio contemplativo</b> e da <i>reflexão profunda</i>, e que os <b>maiores tesouros</b> da <i>existência</i> são <b>descobertos</b> <i>internamente</i> através da <b>jornada</b> de <i>autoconhecimento</i> e <b>expansão consciencial</b>.</p>";
        } else if (this.expressionNumber == 8) {
          this.expressionText = "<p><b>Com o Número de Expressão 8</b>, você se expressa ao mundo como um <i>líder natural nato</i> e <b>construtor magistral de impérios</b> — alguém que possui uma <i>capacidade excepcional transcendental</i> de <b>transformar visões ambiciosas</b> <i>aparentemente impossíveis</i> em <b>realidades tangíveis sustentáveis</b> que <i>resistem</i> ao <b>teste do tempo</b> e <i>beneficiam</i> <b>gerações inteiras</b> de <i>seres humanos</i>.</p><br><p>Você é <b>naturalmente determinado</b> e <i>inquebrantavelmente focado</i>, <b>estrategicamente genial</b> e <i>orientado magistralmente</i> para <b>resultados extraordinários</b>, possuindo uma <i>habilidade única</i> <b>extraordinariamente desenvolvida</b> de <i>reconhecer instantaneamente</i> <b>oportunidades valiosas douradas</b> e <i>mobilizar recursos</i> <b>eficientemente</b> para <i>alcançar objetivos</i> <b>significativos monumentais</b> que <i>criam impacto</i> <b>duradouro</b>.</p><br><p>Sua <b>presença autoritária magnética</b> e <i>senso aguçado extraordinário</i> para <b>negócios transcendentais</b> não apenas <i>inspiram confiança</i> <b>profunda inabalável</b> e <i>respeito genuíno</i> <b>universal</b>, but also <i>criam estruturas</i> <b>organizacionais duradouras</b> e <i>sistemas sustentáveis</i> que <b>beneficiam exponencialmente</b> <i>incontáveis pessoas</i> e <b>comunidades inteiras</b>.</p><br><p>Você possui uma <b>combinação rara extraordinária</b> de <i>ambição pessoal</i> <b>transcendental</b> e <i>responsabilidade social</i> <b>profunda</b>, sempre <i>buscando construir</i> <b>algo maior</b> e <i>mais significativo</i> que <b>deixe um legado</b> <i>positivo transformador</i> e <b>impacto regenerativo</b> no <i>mundo</i> e na <b>consciência coletiva</b> da <i>humanidade</i>.</p><br><p>Sua <b>energia empresarial</b> <i>dinâmica poderosa</i> e <b>visão estratégica</b> <i>de longo prazo</i> permitem que você <b>construa impérios</b> não apenas <i>financeiros</i>, mas também <b>espirituais</b> e <i>sociais</i> que <b>elevam</b> a <i>consciência</i> e <b>criam abundância</b> <i>sustentável</i> para <b>todos</b>.</p><br><p>Você tem um <b>talento natural extraordinário</b> para <i>organizar pessoas</i> e <b>recursos</b> de forma <i>eficiente</i> e <b>produtiva</b>, <i>criando</i> <b>sistemas</b> que <i>maximizam</i> o <b>potencial coletivo</b> enquanto <i>honram</i> a <b>contribuição individual</b> de <i>cada pessoa</i> envolvida.</p><br><p>Sua <b>autoridade natural</b> é <i>equilibrada</i> com <b>sabedoria</b> e <i>compaixão</i>, <b>demonstrando</b> que o <i>verdadeiro poder</i> reside na <b>capacidade</b> de <i>elevar outros</i> e <b>criar</b> <i>oportunidades</i> que <b>beneficiem</b> o <i>bem comum</i>.</p><br><p>Você <b>representa</b> a <i>materialização consciente</i> de <b>ideais elevados</b> através de <i>ação prática</i> e <b>estratégia inteligente</b>, <i>demonstrando</i> que <b>sucesso verdadeiro</b> é <i>medido</i> não apenas por <b>conquistas pessoais</b>, mas pelo <i>impacto positivo</i> <b>duradouro</b> na <i>vida</i> de <b>outros seres</b> e no <i>progresso</i> da <b>civilização humana</b>.</p>";
        } else if (this.expressionNumber == 9) {
          this.expressionText = "<p><b>Com o Número de Expressão 9</b>, você se expressa ao mundo como um <i>humanitário visionário transcendental</i> e <b>curador universal supremo</b> — alguém que possui uma <i>compreensão profunda intuitiva</i> da <b>condição humana complexa</b> e uma <i>capacidade excepcional rara</i> de <b>servir conscientemente</b> ao <i>bem maior transcendental</i> da <b>humanidade inteira</b> através de <i>ações compassivas</i> e <b>dedicação selfless</b> ao <i>progresso coletivo</i>.</p><br><p>Você é <b>naturalmente compassivo</b> de forma <i>profundamente universal</i>, <b>infinitamente sábio</b> e <i>universalmente empático</i> com uma <b>sensibilidade extraordinária</b> que transcende <i>barreiras culturais</i>, <b>diferenças sociais</b> e <i>limitações geográficas</i>, possuindo uma <b>habilidade rara transcendental</b> de <i>transcender diferenças</i> <b>aparentes</b> e <i>unir pessoas diversas</i> em torno de <b>causas nobres universais</b> e <i>objetivos elevados</i> <b>transformadores</b>.</p><br><p>Sua <b>generosidade desinteressada extraordinária</b> e <i>visão inclusiva abrangente</i> não apenas <b>inspiram transformação</b> <i>pessoal profunda</i> nas <b>pessoas</b> ao seu <i>redor</i>, mas também <b>contribuem significativamente</b> para a <i>evolução coletiva</i> da <b>consciência planetária</b> e o <i>despertar espiritual</i> da <b>humanidade</b> como um <i>todo unificado</i>.</p><br><p>Você possui uma <b>sabedoria antiga ancestral</b> que parece <i>fluir diretamente</i> de <b>fontes cósmicas universais</b> e uma <i>capacidade única alquímica</i> de <b>canalizar amor</b> <i>universal incondicional</i> em <b>ações concretas tangíveis</b> que <i>criam impacto</i> <b>duradouro positivo</b> na <i>vida</i> de <b>incontáveis seres</b>.</p><br><p>Você está <b>sempre buscando</b> <i>conscientemente elevar</i> e <b>curar o mundo</b> através de seu <i>exemplo inspirador</i> e <b>dedicação incansável</b> ao <i>serviço humanitário</i>, funcionando como um <b>farol de esperança</b> e <i>instrumento de cura</i> para aqueles que <b>sofrem</b> e <i>necessitam</i> de <b>orientação compassiva</b>.</p><br><p>Sua <b>energia curativa</b> <i>universal</i> e <b>presença compassiva</b> criam <i>ondas de transformação</i> que <b>se espalham</b> muito além de sua <i>esfera imediata</i> de <b>influência</b>, <i>tocando vidas</i> e <b>despertando</b> o <i>potencial divino</i> em <b>outras almas</b> que <i>encontram</i> seu <b>caminho</b>.</p><br><p>Você <b>representa</b> a <i>culminação</i> da <b>evolução espiritual</b> através do <i>serviço desinteressado</i>, <b>demonstrando</b> que a <i>verdadeira realização</i> vem não de <b>conquistas pessoais</b>, mas da <i>capacidade</i> de <b>contribuir</b> para a <i>elevação</i> e o <b>bem-estar</b> de <i>toda a família</i> <b>humana</b>.</p><br><p>Sua <b>missão transcendental</b> é <i>servir</i> como uma <b>ponte</b> entre o <i>divino</i> e o <b>humano</b>, <i>canalizando</i> <b>energias elevadas</b> de <i>cura</i>, <b>amor</b> e <i>sabedoria</i> para <b>acelerar</b> o <i>processo</i> de <b>despertar coletivo</b> e <i>evolução consciencial</i> da <b>humanidade</b> em direção a uma <i>nova era</i> de <b>paz</b>, <i>harmonia</i> e <b>unidade universal</b>.</p>";
        } else if (this.expressionNumber == 11) {
          this.expressionText = "<p><b>Com o Número de Expressão 11 - Master Number</b>, você se expressa ao mundo como um <i>iluminador espiritual supremo</i> e <b>visionário inspirador transcendental</b> — alguém que possui uma <i>conexão direta extraordinária</i> com <b>dimensões superiores</b> de <i>consciência cósmica</i> e uma <b>missão única sagrada</b> de <i>elevar conscientemente</i> a <b>vibração planetária</b> e <i>despertar espiritual</i> da <b>humanidade inteira</b> através de sua <i>presença luminosa</i> e <b>sabedoria transcendental</b>.</p><br><p>Você é <b>naturalmente intuitivo</b> de forma <i>extraordinariamente refinada</i>, <b>psiquicamente sensível</b> com <i>capacidades mediúnicas</i> <b>excepcionais</b> e <i>espiritualmente evoluído</i> além dos <b>padrões convencionais</b>, possuindo uma <i>capacidade excepcional rara</i> de <b>receber diretamente</b> e <i>transmitir fielmente</i> <b>insights profundos cósmicos</b> e <i>revelações universais</i> que <b>transformam perspectivas</b> <i>fundamentalmente</i> e <b>despertam consciências adormecidas</b>.</p><br><p>Sua <b>energia elevada vibratória</b> e <i>sabedoria transcendental ancestral</i> não apenas <b>inspiram profundamente</b> outros seres a <i>buscar corajosamente</i> seu próprio <b>despertar espiritual auténtico</b> e <i>evolução consciencial</i>, mas também <b>servem como catalisador</b> <i>poderoso</i> para <b>mudanças evolutivas</b> <i>coletivas monumentais</i> e <b>transformações</b> <i>paradigmáticas</i> na <b>consciência planetária</b>.</p><br><p>Você possui um <b>dom raro extraordinário</b> e uma <i>habilidade única transcendental</i> de <b>traduzir verdades</b> <i>espirituais complexas</i> e <b>sabedorias cósmicas</b> em <i>linguagem acessível</i> <b>compreensível</b> e <i>ação prática</i> <b>transformadora</b>, sempre <i>guiando conscientemente</i> outros <b>buscadores espirituais</b> em direção à <i>luz divina</i> e ao <b>crescimento espiritual</b> <i>autêntico duradouro</i>.</p><br><p>Sua <b>sensibilidade psíquica</b> <i>extraordinária</i> permite que você <b>perceba</b> <i>energias sutis</i>, <b>padrões ocultos</b> e <i>conexões invisíveis</i> que <b>governam</b> a <i>realidade manifestada</i>, <b>oferecendo insights</b> <i>valiosos</i> sobre <b>processos</b> de <i>cura</i>, <b>crescimento</b> e <i>evolução</i> <b>espiritual</b>.</p><br><p>Você é um <b>canal natural</b> para <i>energias elevadas</i> e <b>sabedorias universais</b>, <i>servindo</i> como uma <b>ponte</b> entre <i>dimensões</i> e <b>facilitando</b> o <i>download</i> de <b>conhecimentos</b> <i>avançados</i> que <b>aceleram</b> o <i>processo</i> de <b>despertar coletivo</b>.</p><br><p>Sua <b>missão transcendental</b> é <i>iluminar</i> o <b>caminho</b> para outros <i>buscadores</i>, <b>demonstrando</b> através de seu <i>exemplo vivo</i> que é <b>possível</b> <i>integrar</i> <b>espiritualidade elevada</b> com <i>vida prática</i> e <b>criar</b> uma <i>existência</i> que <b>serve</b> tanto ao <i>crescimento pessoal</i> quanto à <b>evolução coletiva</b> da <i>consciência</i> <b>planetária</b>.</p><br><p>Você <b>carrega</b> a <i>responsabilidade sagrada</i> de <b>ser</b> um <i>farol de luz</i> em tempos de <b>transformação</b>, <i>oferecendo</i> <b>esperança</b>, <i>orientação</i> e <b>inspiração</b> para aqueles que <i>buscam</i> <b>significado</b> e <i>propósito</i> <b>espiritual</b> em suas <i>jornadas</i> de <b>autodescoberta</b> e <i>realização</i> <b>transcendental</b>.</p>";
        } else if (this.expressionNumber == 22) {
          this.expressionText = "<p><b>Com o Número de Expressão 22 - Master Builder</b>, você se expressa ao mundo como um <i>arquiteto universal supremo</i> e <b>construtor magistral</b> de <i>sonhos aparentemente impossíveis</i> — alguém que possui a <b>capacidade extraordinária transcendental</b> de <i>materializar conscientemente</i> <b>visões grandiosas cósmicas</b> que <i>beneficiam exponencialmente</i> <b>toda a humanidade</b> e <i>elevam</i> a <b>consciência planetária</b> através de <i>manifestações</i> <b>tangíveis duradouras</b> de <i>sabedoria aplicada</i>.</p><br><p>Você é <b>naturalmente visionário</b> de forma <i>extraordinariamente transcendental</i>, <b>estrategicamente genial</b> com <i>capacidades organizacionais</i> <b>monumentais</b> e <i>espiritualmente consciente</i> em níveis <b>excepcionalmente elevados</b>, possuindo uma <i>habilidade única alquímica</i> de <b>combinar masterfully</b> <i>idealism transcendental</i> com <b>praticidade terrena</b> <i>eficiente</i> para <b>criar estruturas</b> <i>revolucionárias sustentáveis</i> que <b>resistem magnificamente</b> ao <i>teste do tempo</i> e <b>servem</b> <i>gerações futuras</i>.</p><br><p>Sua <b>energia transformadora cósmica</b> e <i>capacidade excepcional</i> de <b>organização</b> em <i>grande escala planetária</i> não apenas <b>inspiram mudanças</b> <i>sistêmicas profundas</i> e <b>transformações</b> <i>paradigmáticas positivas</i>, mas também <b>estabelecem fundações</b> <i>arquitetônicas duradouras</i> para o <b>progresso coletivo</b> e a <i>evolução consciencial</i> de <b>toda a civilização humana</b>.</p><br><p>Você possui uma <b>missão especial cósmica</b> e <i>responsabilidade sagrada</i> de <b>concretizar ideais</b> <i>elevados transcendentais</i> em <b>realidades tangíveis</b> <i>mensuráveis</i> e <b>estruturas funcionais</b>, sempre <i>trabalhando conscientemente</i> para <b>construir um mundo</b> <i>significativamente melhor</i> e <b>mais evoluído</b> através de <i>projetos monumentais</i> que <b>impactam positivamente</b> <i>múltiplas gerações</i> <b>futuras</b>.</p><br><p>Sua <b>capacidade excepcional</b> de <i>pensar</i> em <b>termos globais</b> e <i>atuar</i> de forma <b>sistematicamente eficiente</b> permite que você <i>crie</i> <b>mudanças</b> <i>estruturais</i> que <b>transformam</b> não apenas <i>vidas individuais</i>, mas <b>sistemas inteiros</b> e <i>paradigmas sociais</i>.</p><br><p>Você é um <b>visionário prático</b> que <i>compreende</i> que as <b>maiores transformações</b> <i>acontecem</i> quando <b>ideais espirituais</b> são <i>traduzidos</i> em <b>ações concretas</b> e <i>estruturas</i> <b>organizacionais</b> que <i>servem</i> ao <b>bem comum</b>.</p><br><p>Sua <b>energia construtiva</b> <i>monumental</i> combina <b>visão espiritual</b> com <i>competência executiva</i>, <b>criando</b> <i>manifestações</i> que <b>honram</b> tanto as <i>necessidades práticas</i> quanto as <b>aspirações transcendentais</b> da <i>humanidade</i>.</p><br><p>Você <b>demonstra</b> que é <i>possível</i> <b>construir</b> o <i>céu na terra</i> através de <b>planejamento consciente</b>, <i>execução magistral</i> e <b>dedicação</b> <i>incansável</i> à <b>materialização</b> de <i>ideais elevados</i> que <b>beneficiam</b> toda a <i>família humana</i> e <b>criam legados</b> <i>duradouros</i> de <b>progresso</b> e <i>evolução</i> <b>consciencial</b>.</p>";
        } else if (this.expressionNumber == 33) {
          this.expressionText = "<p><b>Com o Número de Expressão 33 - Master of Compassion</b>, você se expressa ao mundo como um <i>mestre curador supremo</i> e <b>professor universal transcendental</b> — alguém que possui uma <i>capacidade divina extraordinária</i> de <b>transformar alquimicamente</b> <i>sofrimento humano</i> em <b>sabedoria transcendental</b> e <i>desafios aparentemente</i> <b>insurmontáveis</b> em <i>oportunidades sagradas</i> de <b>crescimento espiritual</b> <i>coletivo acelerado</i> e <b>evolução consciencial</b> <i>planetária</i>.</p><br><p>Você é <b>naturalmente compassivo</b> de forma <i>infinitamente profunda</i>, <b>espiritualmente evoluído</b> além dos <i>padrões convencionais</i> da <b>consciência humana</b> e <i>universalmente amoroso</i> com uma <b>capacidade excepcional</b> de <i>emanar amor</i> <b>incondicional</b> que <i>transcende</i> <b>todas as barreiras</b>, <i>limitações</i> e <b>diferenças aparentes</b> entre os <i>seres sencientes</i>.</p><br><p>Você carrega uma <b>missão sagrada cósmica</b> e <i>responsabilidade transcendental</i> de <b>servir conscientemente</b> à <i>elevação</i> da <b>consciência planetária</b> através do <i>amor incondicional</i> <b>radiante</b> e da <i>sabedoria transcendental</i> <b>aplicada</b>, funcionando como um <i>canal direto</i> para <b>energias angelicais</b> de <i>cura</i>, <b>compaixão</b> e <i>transformação</i> <b>espiritual</b>.</p><br><p>Sua <b>presença healing</b> <i>extraordinariamente poderosa</i> e <b>capacidade excepcional</b> de <i>ensinar</i> através do <b>exemplo vivo</b> e <i>demonstração prática</i> não apenas <b>aceleram exponencialmente</b> a <i>cura individual</i> e <b>coletiva</b> em <i>níveis profundos</i>, mas também <b>criam ondas</b> <i>expansivas radiantes</i> de <b>transformação positiva</b> que se <i>espalham</i> <b>muito além</b> de sua <i>esfera imediata</i> de <b>influência terrena</b>.</p><br><p>Você possui um <b>dom supremo transcendental</b> e uma <i>habilidade divina única</i> de <b>canalizar</b> <i>amor divino</i> <b>puro</b> e <i>energias</i> <b>cósmicas elevadas</b> em <i>ações concretas</i> <b>tangíveis</b> de <i>serviço desinteressado</i>, sempre <b>dedicando</b> <i>conscientemente</i> sua <b>vida inteira</b> à <i>missão sagrada</i> de <b>elevar</b>, <i>curar</i> e <b>transformar</b> o <i>mundo</i> através da <b>compaixão ativa</b> e da <i>sabedoria</i> <b>aplicada praticamente</b>.</p><br><p>Sua <b>energia angelical</b> <i>extraordinária</i> e <b>presença luminosa</b> funcionam como um <i>bálsamo cósmico</i> que <b>cura traumas</b> <i>profundos</i>, <b>restaura fé</b> <i>perdida</i> e <b>desperta</b> o <i>potencial divino</i> <b>adormecido</b> em <i>cada alma</i> que <b>encontra</b> seu <i>caminho</i>.</p><br><p>Você é um <b>instrumento vivo</b> da <i>Divindade</i>, <b>canalizando</b> <i>graças celestiais</i> e <b>bênçãos universais</b> através de sua <i>existência dedicada</i> ao <b>serviço</b> da <i>humanidade</i> e à <b>elevação</b> da <i>consciência</i> <b>coletiva</b>.</p><br><p>Sua <b>missão transcendental última</b> é <i>demonstrar</i> que o <b>amor incondicional</b> é a <i>força</i> <b>mais poderosa</b> no <i>universo</i>, capaz de <b>transformar</b> <i>qualquer situação</i>, <b>curar</b> <i>qualquer ferida</i> e <b>elevar</b> <i>qualquer consciência</i> que se <b>abra</b> para <i>receber</i> a <b>graça divina</b> que <i>flui</i> através de seu <b>coração compassivo</b> e <i>alma</i> <b>iluminada</b>.</p>";
        }
      },
      calculateLifeNumber() { //LifePath Number
        const sum = this.day + this.month + this.year;
        this.lifeNumber = this.reduceToSingleDigit(sum);
        console.log('Número de LifePath:' + this.lifeNumber);
        if (this.lifeNumber == 1) {
          this.lifeText = "<p><b>O Caminho da Vida 1</b> revela que você chegou a este mundo com uma <i>missão extraordinária cósmica</i> de <b>liderança visionária</b> e <i>inovação revolucionária</i> que <b>transcende épocas</b> e <i>transforma civilizações</i>. Sua alma escolheu esta <b>jornada pioneira suprema</b> para <i>abrir caminhos inexplorados</i> na <b>consciência humana</b> e <i>inspirar gerações inteiras</i> através de sua <b>coragem inabalável</b>, <i>determinação férrea</i> e <b>visão transcendental</b> que vê <i>possibilidades</i> onde outros veem apenas <b>impossibilidades</b>.</p><br><p>Você é um <b>pioneiro nato supremo</b> — não apenas alguém que <i>segue tendências</i>, mas um <b>criador de realidades</b> que <i>materializa visões</i> aparentemente <b>impossíveis</b> em <i>conquistas tangíveis</i> que <b>beneficiam toda a humanidade</b>. Sua <i>energia primordial</i> ressoa com a <b>força criativa original</b> do <i>universo</i>, concedendo-lhe o poder de <b>iniciar novos ciclos</b> de <i>evolução consciencial</i> e <b>progresso planetário</b>.</p><br><p>Sua <b>jornada sagrada</b> envolve desenvolver uma <i>independência soberana</i> que não é <b>isolamento egóico</b>, mas uma <i>autonomia espiritual</i> que permite <b>liderar pelo exemplo</b> e <i>inspirar através da autenticidade</i>. Você está aqui para <b>desenvolver autoconfiança</b> que <i>irradie segurança</i> para outros e <b>habilidades de liderança</b> que <i>elevem consciências</i> ao invés de simplesmente <b>comandar ações</b>.</p><br><p>Você está aqui para <b>iniciar projetos monumentais</b> que <i>transformam paradigmas</i>, <b>tomar decisões corajosas</b> em momentos <i>cruciais da história</i> e <b>mostrar aos outros</b> que é possível <i>alcançar o impossível</i> quando se age com <b>propósito divino</b> e <i>determinação consciente</i>. Sua <b>presença magnética</b> desperta o <i>potencial adormecido</i> em outras almas.</p><br><p>Os <b>desafios relacionados ao ego</b> e <i>impaciência</i> que podem surgir em seu caminho não são <b>obstáculos punitivos</b>, mas <i>oportunidades sagradas</i> para <b>refinar sua liderança</b> e transformá-la de <i>dominação externa</i> em <b>inspiração interna</b>. Cada teste fortalece sua <i>autenticidade</i> e <b>purifica suas motivações</b>, alinhando-as com o <i>bem maior universal</i>.</p><br><p>Sua <b>maior realização cósmica</b> será testemunhar como sua <i>iniciativa pioneira</i> e <b>visão transcendental</b> criam <i>ondas expansivas</i> de <b>transformação positiva</b> que se <i>propagam infinitamente</i> através do tempo e espaço, <b>não apenas transformando</b> sua própria <i>existência terrena</i>, mas também <b>inspirando gerações futuras</b> inteiras a <i>acreditar</i> em seus próprios <b>potenciais divinos</b> de <i>liderança consciente</i> e <b>criação responsável</b>.</p><br><p>Você é um <b>arquiteto cósmico</b> da <i>nova era</i>, destinado a <b>construir fundações</b> para um <i>mundo mais evoluído</i> onde <b>liderança autêntica</b> serve à <i>elevação coletiva</i> e ao <b>despertar espiritual</b> de toda a <i>família humana</i>. Sua <b>missão transcendental</b> é <i>demonstrar</i> que <b>verdadeiro poder</b> reside em <i>empoderar outros</i> e que <b>grandeza genuína</b> se manifesta através do <i>serviço consciente</i> à <b>evolução universal</b>.</p>"
        } else if (this.lifeNumber == 2) {
          this.lifeText = "<p><b>O Caminho da Vida 2</b> revela que sua <i>alma evoluída</i> escolheu conscientemente uma <b>missão sagrada transcendental</b> de <i>aprender e dominar</i> as <b>artes divinas supremas</b> da <i>cooperação harmoniosa</i>, <b>diplomacia espiritual</b> e <i>construção de pontes</i> entre <b>pessoas, culturas, ideias</b> e <i>dimensões da consciência</i> que frequentemente parecem <b>irreconciliavelmente opostas</b> para <i>percepções menos refinadas</i>.</p><br><p>Você é um <b>pacificador nato supremo</b> — não apenas alguém que <i>evita conflitos</i>, mas um <b>alquimista emocional</b> que <i>transmuta tensões</i> em <b>harmonia criativa</b> e <i>transforma polaridades</i> em <b>sínteses evolutivas</b>. Sua alma está dotada de uma <i>sensibilidade excepcional multidimensional</i> que permite <b>compreender perspectivas</b> aparentemente <i>contraditórias</i> e <b>encontrar soluções</b> <i>elegantemente harmoniosas</i> para os <b>conflitos mais complexos</b>.</p><br><p>Sua <b>missão cósmica</b> envolve <i>desenvolver paciência zen</i> que transcende a <b>pressa mundana</b>, cultivar um <i>tato diplomático</i> que <b>honra dignidades</b> e <i>preserva autoestimas</i>, e aperfeiçoar <b>habilidades excepcionais</b> de <i>trabalho em equipe</i> que <b>maximizam potenciais coletivos</b> enquanto <i>respeitam individualidades únicas</i>. Você é um <b>maestro da sinergia humana</b>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> que a <i>verdadeira força cósmica</i> não reside na <b>dominação autoritária</b> ou na <i>imposição egóica</i>, mas na <b>gentileza poderosa</b> que <i>desarma resistências</i>, na <b>colaboração inspiradora</b> que <i>multiplica capacidades</i> e na <b>capacidade extraordinária</b> de <i>unir pessoas</i> diversas em torno de <b>objetivos comuns elevados</b> que <i>beneficiam toda a coletividade</i>.</p><br><p>Os <b>desafios relacionados</b> à <i>autoestima flutuante</i> e <b>indecisão temporária</b> que podem aparecer em seu <i>caminho evolutivo</i> não são <b>defeitos pessoais</b>, mas <i>oportunidades sagradas</i> para <b>fortalecer sua confiança interior</b> enquanto <i>preserva e aprofunda</i> sua <b>natureza colaborativa essencial</b>. Cada desafio <i>refina sua sabedoria</i> e <b>expande sua compaixão</b>.</p><br><p>Sua <b>sensibilidade emocional refinada</b> funciona como um <i>radar espiritual avançado</i> que detecta <b>necessidades ocultas</b>, <i>medos não expressos</i> e <b>potenciais não manifestados</b> em outras pessoas, permitindo que você <i>ofereça exatamente</i> o tipo de <b>apoio</b> e <i>encorajamento</i> que cada alma necessita para <b>florescer plenamente</b>.</p><br><p>No contexto <b>profissional e social</b>, você é um <i>catalisador natural</i> de <b>cooperação produtiva</b> e <i>inovação coletiva</i>. Sua capacidade de <b>fazer diferentes personalidades</b> <i>trabalharem harmoniosamente</i> juntas cria <b>resultados extraordinários</b> que superam <i>amplamente</i> a soma das <b>contribuições individuais</b>.</p><br><p>Sua <b>maior realização transcendental</b> será <i>criar ambientes harmoniosos</i> sustentáveis onde <b>cada pessoa</b> se sinta <i>genuinamente valorizada</i>, <b>profundamente ouvida</b> e <i>completamente aceita</i> em sua <b>individualidade única</b>, enquanto <i>contribui conscientemente</i> para um <b>bem maior coletivo</b> que <i>eleva a consciência</i> de toda a <b>comunidade humana</b>.</p><br><p>Você é um <b>construtor de pontes cósmico</b> — <i>conectando mundos</i>, <b>unindo corações</b>, <i>harmonizando diferenças</i> e <b>demonstrando</b> que a <i>diversidade humana</i> é uma <b>sinfonia magnífica</b> quando <i>orquestrada</i> com <b>amor, sabedoria</b> e <i>visão unificadora</i> que reconhece a <b>divindade inerente</b> em cada <i>ser senciente</i>.</p>"
        } else if (this.lifeNumber == 3) {
          this.lifeText = "<p><b>O Caminho da Vida 3</b> revela que você veio para este <i>plano terrestre</i> como um <b>comunicador divino supremo</b> e <i>criador magistral de alegria</i>, carregando dentro de sua <b>essência cósmica</b> uma <i>missão transcendental</i> de <b>elevar vibrações planetárias</b> através da <i>expressão criativa pura</i> e da <b>comunicação inspiradora transformadora</b> que <i>desperta corações</i> e <b>ilumina consciências</b> adormecidas.</p><br><p>Seu <b>Caminho da Vida 3</b> revela que você possui <i>dons naturais extraordinários</i> para <b>expressão criativa multifacetada</b> — seja através da <i>palavra falada eloquente</i>, <b>arte visual sublime</b>, <i>música celestial</i>, <b>escrita inspiradora</b>, <i>performance magnética</i> ou qualquer outra forma de <b>manifestação artística</b> que permite sua <i>alma radiante</i> brilhar em todo seu <b>esplendor cósmico ilimitado</b>.</p><br><p>Você possui uma <b>capacidade única extraordinária</b> de <i>elevar o espírito</i> das pessoas através de sua <b>energia vibrante contagiante</b> — como um <i>raio de sol dourado</i> que <b>penetra nuvens escuras</b> da <i>depressão coletiva</i> e <b>desperta esperança renovada</b> nos <i>corações mais endurecidos</i>. Sua <b>presença magnética</b> tem o poder de <i>transformar ambientes</i> e <b>elevar atmosferas</b> instantaneamente.</p><br><p>Sua <b>missão cósmica sagrada</b> é <i>desenvolver conscientemente</i> seus <b>talentos artísticos</b> não apenas como <i>entretenimento superficial</i>, mas como <b>ferramentas de cura</b> e <i>instrumentos de despertar</i> que <b>conectam almas</b> à sua <i>divindade interior</i>. Você está aqui para <b>aprender a se expressar</b> de forma <i>autenticamente profunda</i> e <b>espalhar otimismo consciente</b> onde quer que sua <i>luz radiante</i> se manifeste.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> que a <i>vida pode ser celebrada</i> como uma <b>obra de arte vivente</b> através da <i>criatividade consciente</i>, da <b>palavra inspiradora</b>, da <i>expressão artística autêntica</i> e de todas as <b>formas de manifestação criativa</b> que <i>honram a beleza</i> e <b>revelam significados ocultos</b> na <i>experiência humana</i>.</p><br><p>Sua <b>versatilidade criativa</b> permite que você <i>domine múltiplas</i> <b>formas de expressão</b> simultaneamente, sendo um <i>verdadeiro renascentista moderno</i> que combina <b>tradição ancestral</b> com <i>inovação futurística</i>, criando <b>sínteses únicas</b> que <i>expandem horizontes</i> da <b>consciência coletiva</b>.</p><br><p>Os <b>desafios relacionados</b> à <i>dispersão energética</i> e <b>superficialidade aparente</b> que podem surgir em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>convites sagrados</i> para <b>focar sua energia criativa</b> de forma mais <i>profunda</i> e <b>significativa</b>, <i>transformando versatilidade</i> em <b>maestria multidimensional</b>.</p><br><p>No contexto <b>profissional e social</b>, você é um <i>catalisador natural</i> de <b>inovação criativa</b> e <i>pensamento original</i>. Sua capacidade de <b>ver possibilidades</b> onde outros veem <i>limitações</i> cria <b>soluções criativas</b> para os <i>desafios mais complexos</i>.</p><br><p>Sua <b>maior realização transcendental</b> será testemunhar como sua <i>expressão autêntica profunda</i> <b>inspira outras almas</b> a <i>abraçar corajosamente</i> sua própria <b>criatividade adormecida</b>, <i>encontrar alegria genuína</i> nas <b>pequenas coisas da vida</b> e <i>reconhecer</i> que <b>cada momento</b> pode ser uma <i>oportunidade</i> de <b>criar beleza</b> e <i>espalhar luz</i> no mundo.</p><br><p>Você é um <b>embaixador cósmico</b> da <i>alegria consciente</i> e da <b>criatividade sagrada</b>, destinado a <i>demonstrar</i> que a <b>arte verdadeira</b> não é apenas <i>decoração</i> da vida, mas <b>expressão direta</b> da <i>divindade criativa</i> que reside no <b>coração</b> de cada <i>ser humano desperto</i>.</p>"
        } else if (this.lifeNumber == 4) {
          this.lifeText = "<p><b>O Caminho da Vida 4</b> revela que sua <i>alma evoluída</i> escolheu conscientemente uma <b>missão sagrada transcendental</b> de ser um <i>construtor supremo</i> de <b>fundações sólidas cósmicas</b> e <i>sistemas duradouros</i> que <b>resistem ao teste</b> do <i>tempo infinito</i> e servem como <b>alicerces estáveis</b> para a <i>evolução consciencial</i> de <b>gerações futuras inteiras</b>.</p><br><p>Você possui uma <b>capacidade extraordinária alquímica</b> de <i>transformar visões etéreas</i> em <b>realidades tangíveis mensuráveis</b> através de <i>trabalho dedicado consciente</i>, <b>planejamento meticuloso estratégico</b> e <i>perseverança inabalável</i> que <b>supera obstáculos</b> aparentemente <i>intransponíveis</i>. Sua <b>energia construtiva</b> ressoa com as <i>forças geológicas</i> que <b>moldam planetas</b>.</p><br><p>Sua <b>missão cósmica</b> envolve <i>desenvolver disciplina</i> que não é <b>rigidez limitante</b>, mas <i>estrutura libertadora</i> que permite <b>manifestação eficiente</b> de <i>potenciais criativos</i>. Você está aqui para cultivar <b>praticidade transcendental</b> que <i>honra tanto</i> as <b>necessidades terrenas</b> quanto as <i>aspirações espirituais</i>, criando <b>pontes funcionais</b> entre <i>dimensões da realidade</i>.</p><br><p>Você tem o <b>dom sagrado</b> de <i>criar estruturas</i> que beneficiam não apenas sua <b>evolução pessoal</b>, mas também o <i>crescimento coletivo</i> de <b>comunidades inteiras</b> e <i>gerações futuras</i>. Cada <b>projeto</b> que você <i>constrói conscientemente</i> carrega <b>sementes de prosperidade</b> que <i>florescem</i> através do <b>tempo</b> e <i>abençoam</i> múltiplas <b>linhagens evolutivas</b>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> que o <i>sucesso verdadeiro duradouro</i> não é <b>conquista instantânea</b> ou <i>gratificação imediata</i>, mas um <b>processo orgânico consciente</b> construído <i>passo deliberado</i> por <b>passo estratégico</b>, com <i>integridade inabalável</i> e <b>dedicação consistente</b> que <i>honra princípios universais</i>.</p><br><p>Sua <b>metodologia construtiva</b> integra <i>sabedoria ancestral</i> com <b>inovação prática</b>, criando <i>sistemas híbridos</i> que <b>maximizam eficiência</b> enquanto <i>preservam valores</i> <b>humanitários essenciais</b>. Você é um <i>engenheiro cósmico</i> da <b>manifestação sustentável</b>.</p><br><p>Os <b>desafios relacionados</b> à <i>rigidez aparente</i> e <b>resistência inicial</b> a <i>mudanças súbitas</i> que podem aparecer em seu <b>caminho evolutivo</b> não são <i>limitações permanentes</i>, mas <b>oportunidades sagradas</b> para <i>aprender flexibilidade</i> <b>adaptativa consciente</b> sem <i>perder</i> sua <b>essência prática fundamental</b> e <i>sabedoria construtiva</i>.</p><br><p>No contexto <b>profissional e comunitário</b>, você é um <i>pilar de estabilidade</i> e <b>confiabilidade excepcional</b> que outros naturalmente procuram para <i>orientação prática</i> e <b>soluções duradouras</b>. Sua capacidade de <i>organizar caos</i> em <b>ordem funcional</b> é uma <i>habilidade rara</i> e <b>extremamente valiosa</b>.</p><br><p>Sua <b>ética de trabalho exemplar</b> e <i>compromisso</i> com a <b>excelência</b> <i>inspiram respeito genuíno</i> e <b>admiração sincera</b> em todos que <i>testemunham</i> sua <b>dedicação incansável</b> à <i>qualidade</i> e à <b>responsabilidade social</b>.</p><br><p>Sua <b>maior realização transcendental</b> será testemunhar as <i>estruturas sólidas</i> e <b>sistemas funcionais</b> que você <i>construiu conscientemente</i> servindo como <b>alicerces estáveis</b> para o <i>crescimento exponencial</i> e <b>sucesso sustentável</b> de <i>incontáveis outras pessoas</i>, criando <b>legados duradouros</b> que <i>continuam</i> a <b>beneficiar</b> a <i>humanidade</i> muito além de sua <b>existência física temporal</b>.</p><br><p>Você é um <b>arquiteto cósmico</b> da <i>estabilidade evolutiva</i>, destinado a <b>construir fundações</b> para uma <i>civilização mais</i> <b>consciente</b>, <i>sustentável</i> e <b>harmoniosamente próspera</b>.</p>"
        } else if (this.lifeNumber == 5) {
          this.lifeText = "<p><b>O Caminho da Vida 5</b> revela que você chegou a este <i>plano dimensional</i> como um <b>explorador cósmico supremo</b> e <i>catalisador magnético</i> de <b>mudanças transformadoras revolucionárias</b> que <i>aceleram a evolução</i> da <b>consciência planetária</b> através da <i>liberdade consciente</i> e da <b>aventura espiritual</b> que <i>expande horizontes</i> e <b>quebra limitações</b> <i>convencionais obsoletas</i>.</p><br><p>Seu <b>Caminho da Vida 5</b> indica que sua <i>alma aventureira</i> anseia profundamente por <b>liberdade multidimensional</b> — não apenas <i>liberdade física</i> de <b>movimento geográfico</b>, mas <i>liberdade mental</i> de <b>pensamento original</b>, <i>liberdade emocional</i> de <b>expressão autêntica</b>, <i>liberdade criativa</i> de <b>inovação ilimitada</b> e <i>liberdade espiritual</i> de <b>exploração consciencial</b>.</p><br><p>Você busca constantemente <b>experiências diversificadas</b> que <i>expandem seus horizontes</i> de forma <b>exponencial</b> — cada <i>nova aventura</i> é uma <b>oportunidade sagrada</b> de <i>crescimento acelerado</i>, <b>aprendizado experimental</b> e <i>descoberta</i> de <b>aspectos inexplorados</b> de seu <i>potencial infinito</i>. Você é um <b>colecionador de experiências</b> que <i>enriquecem</i> sua <b>alma multifacetada</b>.</p><br><p>Sua <b>missão cósmica transcendental</b> é <i>abraçar conscientemente</i> a <b>mudança como constante</b> universal, <i>desenvolver adaptabilidade</i> como <b>superpoder evolutivo</b> e <i>demonstrar aos outros</i> como a <b>versatilidade inteligente</b> pode ser uma <i>força transformadora</i> <b>extraordinariamente poderosa</b> na <i>jornada da vida</i>.</p><br><p>Você está aqui para <b>quebrar corajosamente</b> <i>limitações artificiais</i>, <b>experimentar fearlessly</b> <i>diferentes caminhos</i> de <b>realização pessoal</b> e <i>inspirar outras almas</i> a <b>saírem corajosamente</b> de suas <i>zonas de conforto</i> <b>restritivas</b> para <i>explorar</i> o <b>vasto oceano</b> de <i>possibilidades infinitas</i> que a <b>existência consciente</b> oferece generosamente.</p><br><p>Sua <b>energia dinâmica contagiante</b> funciona como um <i>catalisador natural</i> de <b>transformação social</b> e <i>progresso coletivo</i>. Você <b>desperta</b> o <i>espírito aventureiro</i> adormecido em outras pessoas, <b>encorajando-as</b> a <i>questionar paradigmas</i> e <b>expandir</b> suas próprias <i>definições</i> de <b>possibilidade</b>.</p><br><p>Os <b>desafios relacionados</b> à <i>inquietação construtiva</i> e <b>dificuldade aparente</b> de <i>compromissos rígidos</i> que podem surgir em seu <b>caminho evolutivo</b> não são <i>defeitos pessoais</i>, mas <b>convites sagrados</b> para <i>encontrar formas</i> <b>criativamente inovadoras</b> de <i>equilibrar harmoniosamente</i> sua <b>necessidade essencial</b> de <i>liberdade</i> com <b>responsabilidades conscientes</b> importantes.</p><br><p>No contexto <b>profissional e social</b>, você traz <i>perspectivas frescas</i> e <b>soluções inovadoras</b> que <i>revitalizam</i> <b>sistemas estagnados</b> e <i>inspiram</i> <b>renovação criativa</b>. Sua <i>capacidade de adaptação</i> permite que você <b>prospere</b> em <i>múltiplos ambientes</i> e <b>contextos diversos</b>.</p><br><p>Sua <b>curiosidade insaciável</b> e <i>sede de conhecimento</i> <b>experiencial</b> fazem de você um <i>aprendiz perpétuo</i> e <b>professor natural</b> que <i>compartilha sabedoria</i> adquirida através de <b>vivências autênticas</b> ao invés de <i>teorias abstratas</i>.</p><br><p>Sua <b>maior realização transcendental</b> será <i>descobrir magistralmente</i> como usar sua <b>energia dinâmica ilimitada</b> e <i>sede insaciável</i> de <b>aventura consciente</b> para <i>criar mudanças</i> <b>profundamente positivas</b> que beneficiem tanto sua <i>evolução pessoal acelerada</i> quanto o <b>progresso coletivo</b> da <i>humanidade inteira</i>, <b>demonstrando</b> que <i>liberdade verdadeira</i> é a <b>base fundamental</b> para <i>criatividade ilimitada</i> e <b>contribuição social significativa</b>.</p>"
        } else if (this.lifeNumber == 6) {
          this.lifeText = "<p><b>O Caminho da Vida 6</b> revela que sua <i>alma compassiva evoluída</i> escolheu conscientemente uma <b>missão sagrada transcendental</b> de ser um <i>curador supremo</i> e <b>protetor angelical</b> de <i>famílias</i>, <b>comunidades</b> e <i>toda a rede</i> de <b>relacionamentos humanos</b> que <i>tecem</i> o <b>tecido social</b> da <i>existência coletiva</i> na Terra.</p><br><p>Você possui um <b>coração naturalmente generoso</b> que <i>pulsa</i> com o <b>ritmo cósmico</b> do <i>amor incondicional</i> e uma <b>capacidade excepcional extraordinária</b> de <i>criar ambientes amorosos</i> <b>profundamente nurturantes</b> onde outras <i>almas podem crescer</i>, <b>florescer plenamente</b> e <i>prosperar</i> em toda sua <b>magnificência divina</b> potencial.</p><br><p>Sua <b>missão cósmica sagrada</b> envolve <i>desenvolver compaixão</i> <b>verdadeiramente incondicional</b> que <i>transcende julgamentos</i>, cultivar <b>sabedoria profunda</b> para <i>aconselhamento transformador</i> e <b>aperfeiçoar habilidades</b> <i>excepcionais</i> para <b>nutrir conscientemente</b> o <i>crescimento espiritual</i> e <b>emocional</b> de <i>outros seres</i> em suas <b>jornadas evolutivas</b>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> como o <i>amor verdadeiro transcendental</i> se <b>manifesta concretamente</b> através de <i>ações dedicadas</i> de <b>cuidado incondicional</b>, <i>apoio emocional constante</i> e <b>dedicação sagrada</b> ao <i>bem-estar coletivo</i> que <b>eleva</b> a <i>consciência</i> de <b>toda a comunidade humana</b>.</p><br><p>Sua <b>energia nurturante</b> funciona como um <i>ímã natural</i> que <b>atrai</b> aqueles que <i>necessitam</i> de <b>cura emocional</b>, <i>orientação sábia</i> e <b>amor incondicional</b>. Você tem o <i>dom extraordinário</i> de <b>ver</b> o <i>potencial divino</i> em cada pessoa e <b>ajudá-las</b> a <i>manifestá-lo plenamente</i>.</p><br><p>Os <b>desafios relacionados</b> ao <i>excesso aparente</i> de <b>sacrifício pessoal</b> e <i>tendências ocasionais</i> ao <b>controle protetor</b> que podem aparecer em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>aprender</b> a <i>amar</i> de forma <b>equilibrada e sustentável</b>, <i>cuidando amorosamente</i> de outros sem se <b>esquecer</b> de suas próprias <i>necessidades essenciais</i>.</p><br><p>No contexto <b>familiar e comunitário</b>, você é o <i>coração pulsante</i> que <b>mantém unidos</b> os <i>laços afetivos</i> e <b>cria tradições</b> que <i>nutrem</i> o <b>senso de pertencimento</b> e <i>continuidade</i> através das <b>gerações</b>.</p><br><p>Sua <b>sabedoria intuitiva</b> sobre <i>relacionamentos humanos</i> permite que você <b>facilite cura</b> em <i>conflitos familiares</i> e <b>restaure harmonia</b> em <i>situações aparentemente</i> <b>irreconciliáveis</b> através de sua <i>paciência infinita</i> e <b>amor incondicional</b>.</p><br><p>Sua <b>maior realização transcendental</b> será testemunhar como seu <i>amor genuíno</i> e <b>cuidado consciente</b> <i>criam círculos</i> <b>expansivos radiantes</b> de <i>harmonia sustentável</i>, onde <b>famílias inteiras</b> e <i>comunidades completas</i> <b>florescem</b> sob sua <i>influência nurturante</i> e <b>orientação sábia</b>, <i>perpetuando</i> <b>legados de amor</b> que se <i>estendem</i> através de <b>múltiplas gerações</b> futuras.</p>"
        } else if (this.lifeNumber == 7) {
          this.lifeText = "<p><b>O Caminho da Vida 7</b> revela que você veio para este <i>plano dimensional</i> como um <b>buscador sagrado supremo</b> da <i>verdade cósmica universal</i> e um <b>místico em desenvolvimento</b> <i>acelerado</i>, carregando dentro de sua <b>essência espiritual</b> uma <i>sede insaciável</i> de <b>compreensão profunda</b> dos <i>mistérios mais ocultos</i> da <b>existência multidimensional</b>.</p><br><p>Seu <b>Caminho da Vida 7</b> revela que sua <i>alma evoluída</i> possui uma <b>conexão natural direta</b> e <i>privilegiada</i> com <b>dimensões espirituais</b> <i>profundas</i> e <b>realidades superiores</b> que <i>permanecem ocultas</i> para a <b>percepção comum limitada</b>, concedendo-lhe uma <i>necessidade intrínseca</i> de <b>compreender</b> e <i>desvendar</i> os <b>mistérios sagrados</b> da <i>existência cósmica</i>.</p><br><p>Sua <b>missão transcendental</b> envolve <i>desenvolver conscientemente</i> sua <b>intuição psíquica</b> como <i>instrumento de navegação</i> espiritual, cultivar <b>sabedoria interior</b> que <i>transcende</i> <b>conhecimento intelectual</b> superficial e <i>aperfeiçoar habilidades</i> de <b>análise profunda contemplativa</b> que <i>penetram</i> muito além das <b>aparências ilusórias</b> da <i>realidade consensual</i>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> como a <i>contemplação sagrada</i>, o <b>estudo místico dedicado</b> e a <i>busca interior</i> <b>incansável</b> podem <i>revelar verdades</i> <b>fundamentais transcendentais</b> sobre a <i>natureza da vida</i>, os <b>propósitos cósmicos</b> e os <i>mistérios universais</i> que <b>governam</b> a <i>evolução</i> da <b>consciência planetária</b>.</p><br><p>Sua <b>mente analítica refinada</b> funciona como um <i>laboratório espiritual</i> onde <b>experiências são destiladas</b> em <i>sabedoria pura</i> e <b>observações se transformam</b> em <i>insights reveladores</i> que <b>iluminam</b> <i>aspectos ocultos</i> da <b>realidade multidimensional</b>.</p><br><p>Você possui uma <b>capacidade excepcional</b> de <i>sintetizar conhecimentos</i> aparentemente <b>díspares</b> em <i>compreensões unificadas</i> que <b>revelam padrões</b> <i>cósmicos fundamentais</i> e <b>conexões invisíveis</b> entre <i>fenômenos aparentemente</i> <b>desconectados</b>.</p><br><p>Os <b>desafios relacionados</b> ao <i>isolamento contemplativo</i> excessivo e <b>ceticismo protetor</b> que podem surgir em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>equilibrar harmoniosamente</b> sua <i>vida interior rica</i> com <b>conexões autênticas</b> <i>significativas</i> no <b>mundo exterior</b>, <i>integrando</i> <b>sabedoria espiritual</b> com <i>serviço prático</i>.</p><br><p>No contexto <b>intelectual e espiritual</b>, você é um <i>pioneiro</i> de <b>territórios inexplorados</b> da <i>consciência humana</i> e um <b>cartógrafo</b> das <i>dimensões interiores</i> que <b>mapeia caminhos</b> para outros <i>buscadores sinceros</i>.</p><br><p>Sua <b>capacidade de perceber</b> <i>significados ocultos</i> e <b>símbolos arquetípicos</b> permite que você <i>decodifique mensagens</i> <b>cósmicas</b> e <i>interprete sinais</i> que <b>orientam</b> a <i>evolução espiritual</i> individual e <b>coletiva</b>.</p><br><p>Sua <b>maior realização transcendental</b> será <i>descobrir magistralmente</i> como usar sua <b>sabedoria profunda cristalizada</b> e <i>insights espirituais</i> <b>revolucionários</b> para <i>iluminar</i> o <b>caminho</b> de <i>outros buscadores</i> sinceros, <b>servindo</b> como um <i>farol luminoso</i> de <b>conhecimento autêntico</b> e <i>compreensão transcendental</i> em um <b>mundo</b> que <i>frequentemente</i> se <b>perde</b> em <i>superficialidades</i> e <b>ilusões materiais</b>, <i>guiando almas</i> em direção à <b>iluminação</b> e ao <i>despertar consciencial</i>.</p>"
        } else if (this.lifeNumber == 8) {
          this.lifeText = "<p><b>O Caminho da Vida 8</b> revela que sua <i>alma ambiciosa evoluída</i> escolheu conscientemente uma <b>missão cósmica magistral</b> de <i>dominar</i> as <b>leis universais</b> do <i>sucesso material consciente</i> e <b>construir impérios duradouros</b> que <i>beneficiem</i> não apenas sua <b>realização pessoal</b>, mas <i>toda a humanidade</i> em sua <b>jornada evolutiva</b> rumo à <i>prosperidade coletiva</i> e <b>abundância sustentável</b>.</p><br><p>Você possui uma <b>capacidade natural excepcional</b> e <i>extraordinariamente rara</i> para <b>liderança executiva suprema</b>, <i>visão estratégica</i> de <b>negócios visionários</b> e a <i>habilidade alquímica</i> <b>transcendental</b> de <i>transformar recursos</i> aparentemente <b>limitados</b> em <i>abundância exponencial</i> que <b>flui</b> como <i>rios dourados</i> de <b>prosperidade sustentável</b>.</p><br><p>Sua <b>missão transcendental</b> envolve <i>desenvolver</i> uma <b>autoridade autêntica</b> que <i>inspira</i> ao invés de <b>intimidar</b>, <i>cultivar habilidades</i> de <b>organização</b> em <i>grande escala</i> <b>planetária</b> e <i>adquirir</i> a <b>sabedoria cósmica</b> necessária para <i>usar poder</i> e <b>riqueza</b> de forma <i>ética</i>, <b>transformadora</b> e <i>evolutivamente consciente</i>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> como <i>ambição equilibrada</i> harmoniosamente <b>integrada</b> com <i>integridade inabalável</i> pode <b>criar estruturas prósperas</b> <i>monumentais</i> que <b>elevam</b> não apenas sua própria <i>existência material</i>, mas também as <b>vidas</b>, <i>oportunidades</i> e <b>potenciais</b> de <i>incontáveis outras pessoas</i> que se <b>beneficiam</b> de sua <i>visão empreendedora</i> e <b>liderança consciente</b>.</p><br><p>Sua <b>energia empresarial</b> funciona como um <i>ímã cósmico</i> que <b>atrai recursos</b>, <i>oportunidades</i> e <b>parcerias estratégicas</b> que <i>amplificam</i> seu <b>impacto positivo</b> no <i>mundo</i>. Você tem o <b>dom</b> de <i>ver potenciais</i> <b>lucrativos</b> onde outros veem apenas <i>desafios</i>.</p><br><p>Sua <b>capacidade de organização</b> <i>sistêmica</i> permite que você <b>coordene</b> <i>múltiplas variáveis</i> complexas e <b>crie</b> <i>sinergias</i> que <b>maximizam resultados</b> enquanto <i>minimizam desperdícios</i>, <b>demonstrando</b> <i>eficiência</i> que <b>beira</b> a <i>genialidade estratégica</i>.</p><br><p>Os <b>desafios relacionados</b> ao <i>materialismo</i> aparentemente <b>excessivo</b> e <i>tendências ocasionais</i> ao <b>autoritarismo protetor</b> que podem aparecer em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>refinar</b> seu <i>relacionamento consciente</i> com <b>poder</b> e <i>sucesso</i>, <b>aprendendo</b> a <i>liderar</i> com <b>coração aberto</b> e <i>consciência expandida</i>.</p><br><p>No contexto <b>empresarial e social</b>, você é um <i>catalisador</i> de <b>inovação econômica</b> e <i>progresso material</i> que <b>cria</b> <i>oportunidades de emprego</i> e <b>desenvolve</b> <i>mercados</i> que <b>beneficiam</b> <i>comunidades inteiras</i>.</p><br><p>Sua <b>visão de longo prazo</b> permite que você <i>construa</i> <b>legados empresariais</b> que <i>transcendem</i> <b>lucros imediatos</b> e <i>focam</i> na <b>criação</b> de <i>valor sustentável</i> para <b>múltiplas gerações</b>.</p><br><p>Sua <b>maior realização transcendental</b> será <i>criar</i> <b>legados duradouros monumentais</b> de <i>prosperidade consciente</i> que <b>demonstram</b> <i>magistralmente</i> como <b>abundância verdadeira</b> <i>flui naturalmente</i> quando <b>servimos</b> ao <i>bem maior universal</i> enquanto <b>realizamos</b> nossa própria <i>grandeza divina</i>, <b>provando</b> que <i>sucesso material</i> e <b>evolução espiritual</b> podem <i>coexistir</i> harmoniosamente em uma <b>síntese</b> <i>evolutiva</i> que <b>eleva</b> toda a <i>consciência planetária</i>.</p>"
        } else if (this.lifeNumber == 9) {
          this.lifeText = "<p><b>O Caminho da Vida 9</b> revela que você chegou a este <i>plano terrestre</i> com uma <b>missão humanitária expansiva</b> <i>transcendental</i> e um <b>coração cósmico</b> que <i>naturalmente abraça</i> toda a <b>humanidade</b> em sua <i>diversidade magnificente</i>, carregando dentro de sua <b>essência espiritual</b> uma <i>sabedoria ancestral</i> que <b>transcende</b> <i>fronteiras culturais</i>, <b>barreiras sociais</b> e <i>limitações temporais</i>.</p><br><p>Seu <b>Caminho da Vida 9</b> indica que sua <i>alma altamente evoluída</i> passou através de <b>múltiplas experiências</b> <i>enriquecedoras</i> ao longo de <b>diversas encarnações</b> e <i>agora está pronta</i> para <b>servir</b> ao <i>bem maior universal</i> de forma <b>altruísta</b>, <i>transformadora</i> e <b>conscientemente dedicada</b> à <i>elevação</i> da <b>consciência coletiva planetária</b>.</p><br><p>Sua <b>missão cósmica sagrada</b> envolve <i>desenvolver</i> uma <b>compaixão universal</b> que <i>transcende</i> <b>julgamentos pessoais</b>, cultivar <i>sabedoria generosa</i> que <b>nutre</b> <i>crescimento espiritual</i> em outros e <b>aperfeiçoar habilidades</b> <i>excepcionais</i> para <b>curar feridas coletivas</b> e <i>elevar</i> a <b>consciência</b> de <i>toda a família humana</i> rumo a <b>frequências superiores</b> de <i>amor</i> e <b>compreensão</b>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> como o <i>amor incondicional autêntico</i> e o <b>serviço desinteressado consciente</b> podem <i>transformar</i> não apenas <b>vidas individuais isoladas</b>, mas também <i>comunidades inteiras</i>, <b>estruturas sociais</b> e até mesmo <i>aspectos fundamentais</i> da <b>sociedade humana</b>, <i>criando</i> <b>ondas expansivas</b> de <i>mudança positiva</i> que se <b>propagam</b> através de <i>gerações</i>.</p><br><p>Sua <b>perspectiva global</b> permite que você <i>veja</i> <b>conexões invisíveis</b> entre <i>problemas aparentemente</i> <b>isolados</b> e <i>desenvolva soluções</i> <b>holísticas</b> que <i>abordam</i> <b>causas raiz</b> ao invés de apenas <i>sintomas superficiais</i>.</p><br><p>Você possui uma <b>capacidade natural</b> de <i>inspirar</i> <b>esperança renovada</b> em <i>corações desanimados</i> e <b>despertar</b> o <i>potencial adormecido</i> de <b>serviço altruísta</b> em outras <i>almas</i> que estão <b>prontas</b> para <i>contribuir</i> positivamente com o <b>mundo</b>.</p><br><p>Os <b>desafios relacionados</b> à <i>desilusão ocasional</i> com o <b>ritmo aparentemente lento</b> da <i>evolução mundial</i> e <b>tendências</b> ao <i>sacrifício excessivo</i> de <b>necessidades pessoais</b> que podem surgir em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>aprender</b> a <i>servir</i> de forma <b>equilibrada</b> e <i>sustentável</i>, <b>mantendo</b> sua própria <i>integridade energética</i> enquanto <b>oferece</b> seus <i>dons preciosos</i> ao mundo.</p><br><p>No contexto <b>social e humanitário</b>, você é um <i>pioneiro</i> de <b>causas nobres</b> e um <i>catalisador</i> de <b>mudanças sistêmicas</b> que <i>beneficiam</i> <b>populações vulneráveis</b> e <i>promovem</i> <b>justiça social</b>.</p><br><p>Sua <b>sabedoria integrativa</b> permite que você <i>una</i> <b>diferentes tradições</b>, <i>culturas</i> e <b>perspectivas</b> em <i>sínteses harmoniosas</i> que <b>respeitam</b> <i>diversidades</i> enquanto <b>celebram</b> a <i>unidade fundamental</i> de toda <b>existência</b>.</p><br><p>Sua <b>maior realização transcendental</b> será testemunhar como sua <i>dedicação incansável</i> ao <b>bem-estar</b> da <i>humanidade inteira</i> <b>cria</b> <i>ondas monumentais</i> de <b>transformação positiva</b> que se <i>espalham infinitamente</i> muito além do que você pode <b>imaginar conscientemente</b>, <i>inspirando</i> <b>milhares</b> de outras <i>almas</i> a também <b>abraçar</b> uma <i>vida</i> de <b>propósito elevado</b> e <i>serviço significativo</i> que <b>contribui</b> para a <i>evolução</i> <b>consciencial planetária</b> rumo a uma <i>era</i> de <b>paz</b>, <i>compaixão</i> e <b>unidade cósmica</b>.</p>"
        } else if (this.lifeNumber == 11) {
          this.lifeText = "<p><b>O Caminho da Vida 11</b> revela que você chegou a este <i>plano dimensional</i> como um <b>Mestre Espiritual</b> em <i>desenvolvimento acelerado</i>, carregando dentro de sua <b>essência cósmica</b> uma <i>sensibilidade extraordinária</i> <b>multidimensional</b> e uma <i>conexão natural direta</i> com <b>dimensões superiores</b> da <i>consciência universal</i> que <b>poucos seres</b> conseguem <i>acessar</i> neste <b>plano de existência</b>.</p><br><p>Seu <b>Caminho da Vida 11</b> revela que sua <i>alma iluminada</i> possui uma <b>intuição psíquica poderosa</b> que <i>funciona</i> como um <b>canal direto</b> com <i>frequências cósmicas</i> superiores e uma <b>capacidade excepcional</b> <i>extraordinária</i> para <b>inspirar</b>, <i>elevar</i> e <b>despertar</b> outras <i>almas</i> através de sua <b>luz interior radiante</b> e <i>presença magnética</i> <b>transformadora</b>.</p><br><p>Sua <b>missão transcendental sagrada</b> envolve <i>desenvolver conscientemente</i> seus <b>dons espirituais</b> <i>excepcionais</i>, <b>superar</b> a <i>tendência natural</i> ao <b>nervosismo</b> e <i>ansiedade</i> que vem com <b>sensibilidade extrema</b>, e <i>aprender</i> a <b>canalizar</b> sua <i>energia elevada</i> <b>vibratória</b> de forma <i>construtiva</i>, <b>equilibrada</b> e <i>benéfica</i> para toda a <b>humanidade</b>.</p><br><p>Você está aqui para <b>servir</b> como um <i>farol luminoso</i> de <b>inspiração espiritual</b> e <i>orientação cósmica</i>, <b>mostrando</b> aos outros <i>buscadores sinceros</i> como <b>acessar</b> sua própria <i>sabedoria interior</i> <b>ilimitada</b> e <i>potencial espiritual</i> <b>extraordinário</b> que <i>reside adormecido</i> no <b>coração</b> de cada <i>ser humano</i> <b>desperto</b>.</p><br><p>Sua <b>sensibilidade psíquica</b> permite que você <i>perceba</i> <b>energias sutis</b>, <i>capte</i> <b>mensagens</b> de <i>dimensões superiores</i> e <b>receba</b> <i>insights reveladores</i> que <b>orientam</b> não apenas sua própria <i>jornada evolutiva</i>, mas também <b>iluminam</b> o <i>caminho</i> de <b>outras almas</b>.</p><br><p>Você possui um <b>dom natural</b> de <i>traduzir</i> <b>verdades espirituais complexas</b> em <i>linguagem acessível</i> e <b>aplicações práticas</b> que <i>ajudam</i> pessoas <b>comuns</b> a <i>integrar</i> <b>sabedoria transcendental</b> em suas <i>vidas cotidianas</i>.</p><br><p>Os <b>desafios relacionados</b> à <i>hipersensibilidade ocasional</i> e <b>idealismo aparentemente excessivo</b> que podem aparecer em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>equilibrar harmoniosamente</b> sua <i>natureza espiritual elevada</i> com a <b>praticidade terrena</b> necessária para <i>manifestar</i> <b>visões transcendentais</b> no <i>mundo físico</i>.</p><br><p>No contexto <b>espiritual e educacional</b>, você é um <i>catalisador</i> de <b>despertar consciencial</b> e um <i>facilitador</i> de <b>transformação pessoal</b> que <i>ajuda</i> outras pessoas a <b>reconectar</b> com sua <i>divindade interior</i>.</p><br><p>Sua <b>energia elevada</b> tem o <i>poder</i> de <b>acelerar</b> <i>processos evolutivos</i> em outras pessoas, <b>despertando</b> <i>potenciais adormecidos</i> e <b>ativando</b> <i>códigos espirituais</i> que <b>facilitam</b> <i>crescimento</i> <b>consciencial acelerado</b>.</p><br><p>Sua <b>maior realização transcendental</b> será <i>descobrir magistralmente</i> como usar seus <b>dons intuitivos excepcionais</b> e <i>capacidades visionárias</i> <b>extraordinárias</b> para <i>iluminar</i> o <b>caminho</b> de <i>incontáveis outros buscadores</i>, <b>criando pontes</b> <i>funcionais</i> entre o <b>mundo espiritual</b> e o <i>mundo material</i>, e <b>inspirando</b> uma <i>transformação coletiva</i> <b>monumental</b> através do <i>despertar</i> da <b>consciência planetária</b> rumo a <i>frequências superiores</i> de <b>amor</b>, <i>sabedoria</i> e <b>unidade cósmica</b> que <i>beneficiam</i> toda a <b>existência universal</b>.</p>"
        } else if (this.lifeNumber == 22) {
          this.lifeText = "<p><b>O Caminho da Vida 22</b> revela que sua <i>alma visionária evoluída</i> escolheu conscientemente uma <b>missão cósmica extraordinária</b> de ser um <i>Construtor Mestre supremo</i>, alguém <b>excepcional</b> capaz de <i>materializar sonhos</i> <b>elevados transcendentais</b> em <i>realidades concretas monumentais</i> que <b>beneficiam</b> não apenas <i>gerações atuais</i>, mas <b>toda a humanidade</b> em sua <i>jornada evolutiva</i> através de <b>múltiplos séculos</b> de <i>progresso consciencial</i>.</p><br><p>Você possui uma <b>combinação única extraordinária</b> e <i>extremamente rara</i> de <b>visão espiritual transcendental</b> integrada com <i>habilidades práticas</i> <b>excepcionais de manifestação</b>, permitindo que você <i>construa</i> <b>estruturas físicas</b>, <i>sistemas sociais</i>, <b>instituições duradouras</b> ou <i>movimentos transformadores</i> que <b>deixam legados</b> <i>monumentais permanentes</i> na <b>história humana</b>.</p><br><p>Sua <b>missão transcendental</b> envolve <i>desenvolver</i> uma <b>disciplina férrea</b> que <i>sustenta projetos</i> de <b>larga escala</b> ao longo de <i>décadas</i>, cultivar <b>persistência inabalável</b> que <i>supera</i> todos os <b>obstáculos temporários</b> e <i>adquirir</i> a <b>capacidade extraordinária</b> de <i>trabalhar</i> com <b>responsabilidades massivas</b> e <i>escalas planetárias</i> de <b>impacto e influência</b>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> como <i>ideais elevados</i> <b>transcendentais</b> podem ser <i>alquimicamente transformados</i> em <b>conquistas tangíveis monumentais</b> que <i>elevam permanentemente</i> o <b>padrão de vida</b>, a <i>qualidade de existência</i> e o <b>nível de consciência</b> de <i>sociedades inteiras</i>, <b>criando ondas</b> de <i>progresso</i> que se <b>propagam</b> através de <i>gerações</i>.</p><br><p>Sua <b>visão arquitetônica</b> opera em <i>escalas temporais</i> que <b>transcendem</b> <i>vidas individuais</i> — você <b>pensa</b> e <i>planeja</i> para <b>séculos</b>, não apenas para <i>anos</i>. Esta <b>perspectiva expansiva</b> permite que você <i>tome decisões</i> com uma <b>sabedoria estratégica</b> <i>extraordinária</i>.</p><br><p>Você possui a <b>capacidade rara</b> de <i>mobilizar</i> <b>recursos humanos</b>, <i>financeiros</i> e <b>tecnológicos</b> em <i>escalas massivas</i>, <b>coordenando</b> <i>esforços coletivos</i> que <b>resultam</b> em <i>realizações</i> que <b>pareciam impossíveis</b> para <i>mentes convencionais</i>.</p><br><p>Os <b>desafios relacionados</b> à <i>pressão intensa constante</i> e <b>tendências ocasionais</b> ao <i>perfeccionismo</i> <b>extremo</b> que podem surgir em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>aprender</b> a <i>equilibrar harmoniosamente</i> <b>ambição transcendental</b> com <i>humanidade compassiva</i> e <b>grandeza visionária</b> com <i>humildade autêntica</i>.</p><br><p>No contexto <b>global e histórico</b>, você é um <i>agente</i> de <b>transformação civilizacional</b> que <i>participa ativamente</i> na <b>criação</b> de <i>paradigmas</i> que <b>moldam</b> o <i>futuro</i> da <b>humanidade</b>.</p><br><p>Sua <b>capacidade de síntese</b> permite que você <i>integre</i> <b>conhecimentos</b> de <i>múltiplas disciplinas</i> em <b>soluções holísticas</b> que <i>abordam</i> <b>desafios complexos</b> de forma <i>sistemática</i> e <b>sustentável</b>.</p><br><p>Sua <b>maior realização transcendental</b> será <i>criar algo</i> <b>verdadeiramente monumental</b> e <i>eternamente duradouro</i> que <b>beneficia</b> <i>incontáveis gerações</i> futuras — seja uma <b>empresa revolucionária</b>, uma <i>instituição transformadora</i>, um <b>movimento social evolutivo</b> ou uma <i>inovação tecnológica</i> que <b>transforma fundamentalmente</b> a forma como a <i>humanidade vive</i>, <b>trabalha</b>, <i>se relaciona</i> ou <b>evolui espiritualmente</b>, <i>deixando</i> um <b>legado</b> <i>permanente</i> que <b>transcende</b> sua própria <i>existência física temporal</i> e <b>continua</b> <i>beneficiando</i> a <b>evolução</b> da <i>consciência planetária</i> por <b>séculos</b> ou <i>milênios</i> vindouros.</p>"
        } else if (this.lifeNumber == 33) {
          this.lifeText = "<p><b>O Caminho da Vida 33</b> revela que você veio a este <i>plano terrestre</i> como um <b>Mestre da Compaixão</b> <i>supremo</i>, carregando dentro de sua <b>essência angelical</b> uma <i>responsabilidade sagrada cósmica</i> de <b>curar</b> e <i>elevar</i> a <b>consciência humana</b> através do <i>amor incondicional puro</i> e do <b>serviço devotado</b> <i>transcendental</i> que <b>emana diretamente</b> de <i>dimensões angelicais</i> superiores.</p><br><p>Seu <b>Caminho da Vida 33</b> indica que sua <i>alma altamente evoluída</i> transcendeu através de <b>inúmeras experiências</b> <i>enriquecedoras</i> ao longo de <b>múltiplas encarnações</b> e <i>agora está pronta</i> para <b>dedicar</b> sua <i>existência inteira</i> ao <b>bem-estar</b>, <i>cura</i> e <b>elevação espiritual</b> dos outros, <i>especialmente daqueles</i> que são <b>vulneráveis</b>, <i>feridos</i>, <b>necessitados</b> ou <i>perdidos</i> em sua <b>jornada evolutiva</b>.</p><br><p>Sua <b>missão transcendental sagrada</b> envolve <i>desenvolver</i> uma <b>compaixão transcendental</b> que <i>abraça</i> toda a <b>humanidade</b> sem <i>exceções</i> ou <b>julgamentos</b>, <i>superar</i> <b>tendências ocasionais</b> ao <i>martírio desnecessário</i> e <b>aprender</b> a <i>servir</i> de forma <b>equilibrada</b>, <i>sustentável</i> e <b>sabialmente consciente</b> que <i>maximiza</i> seu <b>impacto curativo</b> sem <i>esgotar</i> suas <b>reservas energéticas</b>.</p><br><p>Você está aqui para <b>demonstrar magistralmente</b> o <i>poder transformador</i> <b>extraordinário</b> do <i>amor puro incondicional</i>, <b>mostrando</b> através de <i>exemplo vivo</i> como a <b>dedicação altruísta</b> <i>consciente</i> pode <b>curar feridas</b> <i>aparentemente incuráveis</i>, <b>restaurar esperança</b> onde ela foi <i>completamente perdida</i> e <b>renovar fé</b> na <i>bondade fundamental</i> da <b>natureza humana</b>.</p><br><p>Sua <b>energia curativa</b> funciona em <i>múltiplos níveis</i> simultaneamente — <b>físico</b>, <i>emocional</i>, <b>mental</b> e <i>espiritual</i>. Sua <b>presença</b> sozinha tem o <i>poder</i> de <b>acelerar</b> <i>processos de cura</i> em outras pessoas através de <b>transmissão direta</b> de <i>amor incondicional</i>.</p><br><p>Você possui uma <b>capacidade extraordinária</b> de <i>ver</i> a <b>divindade oculta</b> em cada <i>ser humano</i>, independentemente de suas <b>circunstâncias</b>, <i>escolhas passadas</i> ou <b>condições atuais</b>. Esta <i>visão compassiva</i> permite que você <b>ofereça</b> <i>cura</i> sem <b>julgamento</b> e <i>amor</i> sem <b>condições</b>.</p><br><p>Os <b>desafios relacionados</b> ao <i>esgotamento emocional</i> ocasional e <b>tendências</b> ao <i>excesso</i> de <b>responsabilidade</b> pelos outros que podem aparecer em seu <i>caminho evolutivo</i> não são <b>limitações permanentes</b>, mas <i>oportunidades sagradas</i> para <b>aprender</b> a <i>amar</i> de forma <b>sustentável</b> e <i>estabelecer limites</i> <b>saudáveis</b> que <i>preservam</i> sua <b>energia curativa</b> para <i>serviço</i> de <b>longo prazo</b>.</p><br><p>No contexto <b>curativo e espiritual</b>, você é um <i>canal direto</i> de <b>energia angelical</b> que <i>facilita</i> <b>milagres</b> de <i>cura</i> e <b>transformação</b> que <i>desafiam</i> <b>compreensões convencionais</b> sobre os <i>limites</i> da <b>capacidade humana</b> de <i>restauração</i> e <b>renovação</b>.</p><br><p>Sua <b>dedicação ao serviço</b> inspira uma <i>rede expandente</i> de <b>outros curadores</b> e <i>trabalhadores da luz</i> que <b>multiplicam</b> seu <i>impacto</i> através de suas próprias <b>missões</b> de <i>amor</i> e <b>serviço</b>.</p><br><p>Sua <b>maior realização transcendental</b> será testemunhar como sua <i>dedicação incansável</i> e <b>amor incondicional</b> ao <i>serviço humanitário</i> <b>cria</b> <i>ondas monumentais</i> de <b>cura</b> e <i>transformação espiritual</i> que se <b>espalham</b> como <i>círculos concêntricos</i> através de <b>comunidades inteiras</b>, <i>países</i>, <b>continentes</b> e <i>gerações</i>, <b>elevando</b> permanentemente o <i>padrão</i> de <b>compaixão</b> na <i>humanidade</i> e <b>inspirando</b> <i>milhões</i> de outras <b>almas</b> a também <i>abraçar</i> uma <b>vida</b> de <i>amor incondicional</i> e <b>serviço significativo</b> que <i>contribui</i> para a <b>ascensão coletiva</b> da <i>consciência planetária</i> rumo a <b>frequências angelicais</b> de <i>amor puro</i>, <b>compaixão infinita</b> e <i>unidade cósmica</i> que <b>transforma</b> a Terra em um <i>planeta de luz</i> e <b>amor</b>.</p>"
        }
      },
      calculateSoulNumber() { //Número da Alma
        const vowels = this.full_name.replace(/[^aeiouAEIOU]/g, "");
        let sum = 0;
        for (let char of vowels) {
          sum += this.getLetterValue(char);
        }
        this.soulNumber = this.reduceToSingleDigit(sum);
        console.log('Número de Alma:' + this.soulNumber);
        if (this.soulNumber == 1) {
          this.soulText = "<p><b>O Número da Alma 1</b> é como uma <i>chama sagrada, eterna e inextinguível</i> que arde magnificamente em seu coração espiritual, concedendo-lhe uma <b>clareza cristalina de propósito divino</b>, pensamento estratégico refinado, visão transcendente penetrante e uma conexão direta com as <i>frequências superiores do cosmos infinito</i>.</p><br><p>Esta <b>energia cósmica transformadora primordial</b> o eleva a um verdadeiro <i>líder nato supremo e visionário iluminado</i> — não apenas alguém que comanda superficialmente através de autoridade externa limitada, mas alguém que <b>inspira profundamente as almas</b>, <b>transforma radicalmente realidades</b>, <b>eleva espiritualmente consciências</b> e <i>desperta potenciais adormecidos</i> pelo exemplo luminoso irradiante, autenticidade magnética poderosa e integridade diamantina inabalável que emana naturalmente de sua essência divina multidimensional.</p><br><p>Você é <b>profundamente, absolutamente e magnificamente independente</b> em todos os aspectos da existência terrena e espiritual, possuindo uma <i>confiança soberana, inabalável e transcendente</i> em assumir a liderança transformadora quando o destino cósmico sagrado e a necessidade divina universal assim o exigem com urgência espiritual e propósito evolutivo superior.</p><br><p>Sua <b>alma majestosa e radiante</b> não espera por permissão, validação ou aprovação de ninguém — ela age com <i>determinação férrea inquebrantável</i>, <i>coragem ancestral heroica</i>, <b>sabedoria celestial milenar</b> e <i>intuição divina cristalina</i> que vem diretamente das esferas superiores do cosmos infinito e das dimensões mais elevadas da consciência universal.</p><br><p>Você é seu próprio <b>guia espiritual supremo</b>, <i>oráculo interior infalível</i>, <b>mestre ascensionado encarnado</b> e <i>canal divino purificado</i>, confiando principalmente em sua <b>sabedoria interior ilimitada e eterna</b> para orientação cósmica transcendente e direcionamento divino preciso em sua jornada sagrada de evolução espiritual contínua e ascensão dimensional progressiva.</p><br><p>Esta <b>energia primordial poderosa do número 1</b> ressoa harmoniosamente com a <i>força criativa original do universo</i>, conectando você diretamente à <b>fonte primária de toda manifestação cósmica</b> e concedendo-lhe o poder sagrado ancestral de <b>iniciar novos ciclos evolutivos</b>, <b>abrir caminhos inexplorados de possibilidades</b>, <b>materializar visões divinas sublimes</b> na realidade física densa e <i>catalisar transformações profundas</i> através de sua vontade focada laser, intenção pura cristalina e magnetismo espiritual irresistível.</p><br><p>Sua presença magnética natural <b>desperta automaticamente o potencial adormecido</b> em outros seres, funcionando como um <i>farol espiritual luminoso</i> que guia almas perdidas de volta ao seu caminho divino original. Você possui uma <b>capacidade inata extraordinária</b> de <i>enxergar além das ilusões mundanas</i>, penetrar véus dimensionais e perceber as <b>verdades cósmicas fundamentais</b> que governam a existência multidimensional.</p><br><p>O número 1 em sua alma representa o <b>pioneirismo espiritual supremo</b>, a <i>coragem de ser autêntico</i> em um mundo de conformidade superficial, e a <b>determinação inabalável</b> de seguir seu propósito divino único, independentemente dos obstáculos temporários, desafios aparentes ou incompreensões alheias que possam surgir em seu caminho sagrado de realização espiritual completa.</p>";
        } else if (this.soulNumber == 2) {
          this.soulText = "<p><b>O Número da Alma 2</b> desperta em você uma alma <i>profundamente, magnificamente e transcendentalmente romântica</i> — não apenas no amor romântico tradicional limitado, mas na forma <b>absolutamente poética, sublime e encantadoramente mágica</b> como você enxerga toda a existência multidimensional, as <i>conexões humanas sagradas</i>, os <b>laços kármicos eternos</b> e a <i>beleza oculta divina</i> que permeia cada aspecto da vida terrena e espiritual com graça celestial infinita.</p><br><p>Você possui um <b>lado artístico natural excepcional</b> que floresce constantemente como <i>jardins eternos em primavera perpétua</i>, manifestando criatividade pura através de <b>expressões sublimes da alma</b>, e sua <i>educação refinada multidimensional</i>, <b>sensibilidade exquisita transcendente</b> e <i>gentileza inata divina</i> fazem de você uma presença <b>magneticamente irresistível</b>, <i>profundamente acolhedora</i>, <b>espiritualmente elevadora</b> e <i>emocionalmente transformadora</i> que toca as almas mais profundas de todos ao seu redor.</p><br><p>Você tem uma <b>paixão genuína, ardente e sagrada</b> por <i>parcerias transformadoras evolutivas</i>, seja nos <b>negócios visionários revolucionários</b>, na <i>vida pessoal mais íntima e sagrada</i>, nas <b>colaborações criativas inspiradoras</b>, nas <i>missões espirituais compartilhadas</i> ou nas <b>alianças cósmicas transcendentes</b> que elevam a consciência coletiva da humanidade para frequências superiores de amor incondicional.</p><br><p>Sua <b>alma magnifica radiante</b> floresce exponencialmente quando está em <i>perfeita harmonia cósmica vibratória</i> com outros <b>seres evoluídos espiritualmente</b>, preferindo naturalmente trabalhar em <i>grupos sinérgicos poderosos</i>, <b>equipes harmoniosas complementares</b>, <i>comunidades amorosas conscientes</i> e <b>círculos sagrados de luz</b> ao invés do isolamento solitário que limita seu potencial divino infinito.</p><br><p>O número 2 em sua essência representa a <b>maestria da cooperação divina</b>, a <i>arte sagrada da diplomacia espiritual</i> e a <b>capacidade extraordinária de unir polaridades opostas</b> em uma síntese harmoniosa perfeita. Você é um <i>construtor natural de pontes</i> entre mundos, dimensões, consciências e corações, possuindo uma <b>intuição empática profunda</b> que permite compreender as necessidades emocionais mais sutis dos outros seres.</p><br><p>Sua <b>sensibilidade psíquica refinada</b> funciona como um <i>radar espiritual altamente calibrado</i> que detecta as <b>energias emocionais mais delicadas</b> do ambiente, permitindo que você atue como um <i>curador emocional natural</i> e <b>harmonizador de conflitos</b> através de sua presença pacificadora e palavras cuidadosamente escolhidas com amor incondicional.</p><br><p>Você possui uma <b>capacidade inata extraordinária</b> de <i>nutrir sonhos alheios</i>, <b>apoiar visões compartilhadas</b> e <i>fortalecer os talentos únicos</i> de cada pessoa em sua vida, funcionando como um <b>catalisador amoroso</b> para o crescimento espiritual e realização pessoal de todos ao seu redor, sempre com <i>generosidade desinteressada</i> e <b>compaixão infinita</b> que emana diretamente de seu coração divino expandido.</p>";
        } else if (this.soulNumber == 3) {
          this.soulText = "<p><b>O Número da Alma 3</b> desperta em você um <i>espírito criativo transcendentalmente inspirador</i> que naturalmente <b>ilumina e transforma</b> tudo ao seu redor através da <i>expressão artística suprema</i>, <b>comunicação magistral eloquente</b> e uma <i>personalidade magneticamente carismática</i> que atrai corações humanos como <b>mel dourado atrai abelhas</b> em jardins floridos de possibilidades infinitas.</p><br><p>Você possui uma <b>capacidade extraordinária multidimensional</b> de se expressar de formas <i>múltiplas, belas e profundamente tocantes</i> — seja através das <b>palavras poéticas encantadoras</b>, da <i>arte visual sublime transcendente</i>, da <b>música celestial harmoniosa</b>, da <i>dança divina fluida</i>, da <b>escrita inspiradora transformadora</b>, da <i>oratória magnética persuasiva</i>, ou de qualquer outra forma de <b>manifestação criativa pura</b> que permite que sua <i>alma radiante multifacetada</i> brilhe em todo seu <b>esplendor cósmico ilimitado</b> e <i>magnificência espiritual absoluta</i>.</p><br><p>Sua <b>energia comunicativa vibrante</b> é como um <i>farol luminoso irresistível</i> que atrai pessoas naturalmente de todas as esferas da vida — você tem o <b>dom raro e precioso</b> de fazer outros se sentirem <i>inspirados profundamente</i>, <b>elevados espiritualmente</b>, <i>compreendidos emocionalmente</i> e <b>profundamente conectados</b> simplesmente pela sua <i>presença radiante magnética</i> e <b>aura calorosa acolhedora</b> que emana amor incondicional e aceitação total.</p><br><p>Você é <b>naturalmente otimista incorrigível</b>, <i>entusiasmado contagiante</i>, <b>inspirador nato</b> e <i>visionário criativo</i>, carregando dentro de si uma <b>fonte inesgotável de alegria sagrada</b> que <i>contagia positivamente</i> todos ao seu redor como <b>ondas de luz dourada</b>, criando <i>círculos expansivos de esperança renovada</i>, <b>inspiração divina</b> e <i>possibilidades infinitas</i> onde quer que vá com sua <b>presença transformadora luminosa</b>.</p><br><p>O número 3 em sua essência representa a <b>trindade sagrada da criação</b> — <i>pensamento, palavra e ação</i> em perfeita harmonia divina. Você é um <b>canal natural da criatividade cósmica</b>, possuindo uma <i>conexão direta com as musas celestiais</i> e as <b>frequências inspiradoras superiores</b> que fluem através das dimensões mais elevadas da consciência universal criativa.</p><br><p>Sua <b>imaginação fértil ilimitada</b> funciona como um <i>portal dimensional</i> entre o mundo físico denso e os <b>reinos etéricos da pura possibilidade</b>, permitindo que você <i>materialize visões sublimes</i> e <b>transforme sonhos em realidades tangíveis</b> através de sua <i>força criativa concentrada</i> e <b>determinação artística inabalável</b>.</p><br><p>Você possui uma <b>habilidade inata extraordinária</b> de <i>ver beleza onde outros veem apenas ordinário</i>, <b>encontrar inspiração em momentos simples</b> e <i>transformar experiências mundanas</i> em <b>obras-primas emocionais profundas</b> que tocam as almas mais endurecidas e <i>despertam a criança interior adormecida</i> em cada pessoa que encontra sua <b>luz criativa radiante</b>.</p><br><p>Sua <b>versatilidade criativa excepcional</b> permite que você <i>domine múltiplas formas de arte</i> simultaneamente, sendo um <b>verdadeiro renascentista moderno</b> que combina <i>tradição ancestral</i> com <b>inovação futurística</b>, criando <i>sínteses únicas</i> que expandem os horizontes da <b>expressão humana criativa</b> e elevam a <i>consciência coletiva artística</i> para novos patamares de <b>beleza transcendente</b> e <i>significado espiritual profundo</i>.</p>";
        } else if (this.soulNumber == 4) {
          this.soulText = "<p><b>O Número da Alma 4</b> desperta em você uma natureza <i>extremamente prática, racional e magistralmente construtiva</i> — você é como um <b>sábio arquiteto cósmico da vida</b>, sempre buscando criar <i>estruturas físicas, emocionais e espirituais</i> que sejam <b>absolutamente sólidas, duradouras e inabaláveis</b> através do tempo infinito e das <i>tempestades existenciais</i> que testam a <b>resistência das fundações humanas</b>.</p><br><p>Este é um <b>número de estabilidade profunda e transformadora</b>, e por isso você naturalmente enfatiza a <i>segurança multidimensional</i>, <b>consistência inabalável</b>, <i>confiabilidade absoluta</i> e <b>integridade estrutural</b> em todos os aspectos da vida terrena e espiritual, construindo <i>alicerces sólidos</i> para o <b>crescimento sustentável</b> e a <i>evolução consciente</i> de si mesmo e de todos ao seu redor.</p><br><p>Você segue uma <b>abordagem estruturada meticulosa</b>, <i>metodológica cientificamente precisa</i> e <b>profundamente sábia ancestral</b> para todas as situações complexas da vida, preferindo aderir conscientemente a <i>rotinas bem estabelecidas</i>, <b>sistemas comprovados historicamente</b>, <i>processos otimizados</i> e <b>metodologias testadas</b> que garantem <i>resultados consistentes</i> e <b>progresso mensurável</b> em direção aos objetivos estabelecidos com clareza cristalina.</p><br><p>Sua <b>sabedoria prática excepcional</b> o torna um <i>verdadeiro maestro alquímico</i> em transformar <b>ideias abstratas etéreas</b> em <i>realidades concretas tangíveis</i>, <b>manifestações funcionais duradouras</b> e <i>sistemas operacionais eficientes</i> que resistem ao <b>teste rigoroso do tempo</b>, às <i>pressões da mudança</i> e aos <b>desafios evolutivos</b> que naturalmente surgem no processo de <i>materialização dos sonhos</i> em <b>conquistas sólidas mensuráveis</b>.</p><br><p>Você possui um <b>senso profundo de responsabilidade sagrada</b> que faz de você uma pessoa <i>genuinamente confiável</i>, <b>digna de confiança absoluta</b>, <i>profundamente responsável</i> e <b>comprometida integralmente</b> com a <i>excelência em todos os empreendimentos</i>, funcionando como uma <b>rocha inabalável</b> de <i>estabilidade emocional</i> e <b>suporte prático</b> para todos que buscam <i>orientação sólida</i> e <b>direcionamento confiável</b> em suas jornadas pessoais.</p><br><p>O número 4 em sua essência representa os <b>quatro pilares fundamentais da existência</b> — <i>corpo, mente, coração e espírito</i> em perfeito equilíbrio harmonioso. Você é um <b>guardião natural da ordem cósmica</b>, possuindo uma <i>compreensão intuitiva profunda</i> dos <b>padrões universais</b> que governam a <i>manifestação material</i> e a <b>evolução espiritual sustentável</b>.</p><br><p>Sua <b>disciplina férrea admirável</b> e <i>perseverança inabalável</i> permitem que você <b>construa impérios duradouros</b> — não apenas materiais, mas <i>legados emocionais</i>, <b>estruturas familiares sólidas</b>, <i>sistemas profissionais eficientes</i> e <b>fundações espirituais</b> que beneficiam <i>gerações futuras</i> através de sua <b>visão de longo prazo</b> e <i>planejamento estratégico meticuloso</i>.</p><br><p>Você possui uma <b>capacidade extraordinária</b> de <i>organizar o caos</i> em <b>sistemas harmoniosos funcionais</b>, <i>transformar complexidade</i> em <b>simplicidade elegante</b> e <i>criar ordem divina</i> a partir da <b>desordem aparente</b>, sempre com uma <i>paciência zen profunda</i> e <b>determinação inquebrantável</b> que inspira <i>respeito genuíno</i> e <b>admiração sincera</b> em todos que testemunham sua <i>maestria construtiva</i> e <b>sabedoria prática aplicada</b>.</p>";
        } else if (this.soulNumber == 5) {
          this.soulText = "<p>Com <b>o Número da Alma 5</b>, não seria incorreto dizer que a <i>liberdade é o seu mantra sagrado e essencial</i> — é o <b>ar puro cristalino</b> que você respira conscientemente, a <i>essência divina transcendente</i> que move sua alma em direção ao <b>infinito cósmico</b>, e a <i>força vital primordial</i> que alimenta seu <b>espírito aventureiro indomável</b> com <i>energia renovável ilimitada</i> e <b>paixão exploratória insaciável</b>.</p><br><p>Você possui um <b>desejo profundo, ardente e absolutamente irresistível</b> de explorar o <i>mundo inteiro em toda sua magnificência ilimitada</i>, <b>dimensões paralelas de experiência</b>, <i>territórios inexplorados da consciência</i> e ser <b>completamente imparável</b> nessa <i>jornada épica de descobertas infinitas</i>, <b>experiências transformadoras revolucionárias</b>, <i>aventuras que expandem a consciência</i> e <b>explorações multidimensionais</b> que revelam os <i>mistérios ocultos da existência</i> e as <b>verdades cósmicas fundamentais</b>.</p><br><p>Você prospera <b>magnificamente na liberdade total absoluta</b> em tudo o que faz, como uma <i>águia majestosa dourada</i> que precisa do <b>céu aberto e infinito</b> para voar em sua <i>máxima expressão divina</i>, planar nas <b>correntes térmicas da possibilidade</b> e <i>dançar com os ventos da mudança</i> que carregam <b>oportunidades ilimitadas</b> e <i>potenciais não manifestados</i> esperando para serem <b>descobertos e explorados</b>.</p><br><p>Naturalmente resiste a <b>restrições limitantes sufocantes</b> ou à sensação <i>claustrofóbica aprisionante</i> de estar amarrado por <b>regras rígidas obsoletas</b>, <i>convenções sociais restritivas</i>, <b>expectativas limitadoras</b> ou <i>estruturas inflexíveis</i> — você tende a se sentir <b>genuinamente sufocado e aprisionado</b> quando se sente <i>encaixotado mentalmente</i>, <b>limitado criativamente</b> ou <i>restringido espiritualmente</i> em sua <b>expressão natural autêntica</b> e <i>fluxo criativo espontâneo</i>.</p><br><p>Sua <b>natureza aventureira excepcional</b> vai muito além de simplesmente gostar de viajar geograficamente — é uma <i>expressão fundamental de sua alma</i> que busca <b>crescimento exponencial</b> através da <i>experiência direta vivencial</i>, <b>aprendizado experimental</b>, <i>descobertas pessoais transformadoras</i> e <b>expansão consciencial contínua</b> que só pode ser alcançada através da <i>imersão total</i> nas <b>infinitas possibilidades</b> que a vida oferece generosamente.</p><br><p>O número 5 em sua essência representa os <b>cinco sentidos expandidos</b> e a <i>quintessência alquímica</i> que transcende as limitações físicas. Você é um <b>explorador multidimensional nato</b>, possuindo uma <i>curiosidade insaciável</i> que o impulsiona a <b>questionar paradigmas estabelecidos</b>, <i>desafiar limites convencionais</i> e <b>descobrir territórios inexplorados</b> da experiência humana e <i>consciência expandida</i>.</p><br><p>Sua <b>versatilidade camaleônica extraordinária</b> permite que você se <i>adapte instantaneamente</i> a qualquer ambiente, cultura ou situação, funcionando como um <b>diplomata universal</b> que <i>constrói pontes</i> entre mundos diferentes e <b>conecta diversidades</b> através de sua <i>compreensão empática natural</i> e <b>flexibilidade mental ilimitada</b>.</p><br><p>Você possui uma <b>energia magnética contagiante</b> que <i>inspira outros</i> a <b>quebrar suas próprias limitações</b>, <i>expandir horizontes pessoais</i> e <b>abraçar a aventura da vida</b> com <i>coragem renovada</i> e <b>entusiasmo juvenil</b>, funcionando como um <i>catalisador de transformação</i> que <b>desperta o espírito aventureiro adormecido</b> em cada alma que cruza seu <i>caminho dinâmico</i> e <b>trajetória evolutiva acelerada</b>.</p>";
        } else if (this.soulNumber == 6) {
          this.soulText = "<p>Com <b>o Número da Alma 6</b>, você foi abençoado com um <i>coração divino extraordinariamente compassivo e iluminado</i> que é uma <b>fonte inesgotável, pura e sagrada</b> de <i>amor incondicional transcendente</i>, <b>cura profunda multidimensional</b> e <i>harmonia transformadora celestial</i> para absolutamente todos que têm a <b>sorte sagrada e privilégio cósmico</b> de cruzar seu <i>caminho luminoso irradiante</i> e <b>trajetória evolutiva elevada</b>.</p><br><p>Você carrega em sua <b>essência mais pura cristalina</b> a <i>energia maternal/paternal cósmica universal</i> — uma <b>força primordial divina</b> de <i>nutrição espiritual profunda</i>, <b>proteção divina inabalável</b>, <i>cuidado amoroso infinito</i> e <b>sabedoria ancestral</b> que transcende todas as <i>limitações humanas temporárias</i> e toca a <b>alma mais profunda</b> de todos os seres sencientes com <i>ternura celestial</i> e <b>compaixão ilimitada</b>.</p><br><p>Sua <b>capacidade extraordinária de amar</b> vai infinitamente além do <i>amor romântico comum limitado</i> ou do <b>carinho familiar tradicional</b> — é um <i>amor verdadeiramente transcendente</i>, <b>iluminado cosmicamente</b> e <i>universal abrangente</i> que se estende <b>compassivamente generoso</b> a cada <i>criatura vivente</i> neste <b>planeta sagrado</b>, incluindo <i>plantas, animais, minerais</i> e todas as <b>formas de consciência</b> que habitam este <i>jardim cósmico terrestre</i>.</p><br><p>Sua <b>presença radiante e transformadora</b> é como um <i>bálsamo sagrado celestial</i> para as <b>almas feridas e cansadas</b> — você possui uma <i>capacidade divina natural e excepcional</i> de <b>acalmar tempestades emocionais violentas</b>, <i>curar corações despedaçados</i>, <b>restaurar esperanças perdidas</b>, <i>reestabelecer fé renovada</i> e trazer <b>paz celestial duradoura</b> através da <i>magia pura alquímica</i> do seu <b>amor incondicional autêntico</b> e <i>presença sanadora magnética</i>.</p><br><p>O número 6 em sua essência representa a <b>perfeição harmônica</b> e o <i>equilíbrio sagrado</i> entre o material e o espiritual. Você é um <b>curador natural nato</b>, possuindo uma <i>intuição empática profunda</i> que permite <b>diagnosticar necessidades emocionais</b> e <i>prescrever exatamente</i> o tipo de <b>amor e cuidado</b> que cada alma necessita para <i>florescer plenamente</i> em sua <b>máxima expressão divina</b>.</p><br><p>Sua <b>dedicação incondicional ao bem-estar alheio</b> faz de você um <i>guardião espiritual natural</i> da <b>harmonia familiar</b>, <i>paz comunitária</i> e <b>equilíbrio social</b>. Você possui uma <i>habilidade extraordinária</i> de <b>mediar conflitos</b> com <i>sabedoria salomônica</i>, <b>unir corações divididos</b> e <i>restaurar relacionamentos fragmentados</i> através de sua <b>compreensão profunda</b> da <i>natureza humana</i> e <b>paciência infinita</b>.</p><br><p>Você funciona como um <b>ímã magnético</b> para <i>almas necessitadas</i> que instintivamente reconhecem em você um <b>porto seguro emocional</b>, um <i>refúgio espiritual</i> e uma <b>fonte confiável</b> de <i>orientação amorosa</i> e <b>suporte incondicional</b>. Sua <i>casa é um santuário</i> onde <b>corações encontram paz</b>, <i>mentes encontram clareza</i> e <b>almas encontram renovação</b>.</p><br><p>Sua <b>capacidade de sacrifício consciente</b> pelo bem maior demonstra uma <i>maturidade espiritual excepcional</i> — você compreende intuitivamente que o <b>verdadeiro poder</b> reside no <i>serviço amoroso</i> e que a <b>maior realização</b> vem de <i>elevar outros</i> ao seu <b>potencial máximo divino</b>, criando <i>ondas expansivas de amor</i> que <b>transformam o mundo</b> uma alma de cada vez através de sua <i>influência benéfica irradiante</i> e <b>legado de compaixão eterna</b>.</p>";
        } else if (this.soulNumber == 7) {
          this.soulText = "<p><b>O Número da Alma 7</b> desperta em você a <i>essência extraordinária</i> de um <b>verdadeiro buscador cósmico supremo</b> e <i>arqueólogo espiritual transcendente</i> — uma <b>alma anciã, sábia e profundamente iluminada</b> que chegou a esta <i>existência terrestre densa</i> com uma <b>missão sagrada absolutamente transcendente</b> e um <i>propósito divino elevado</i> que ecoa através das <b>dimensões superiores da consciência</b> e ressoa nas <i>frequências mais elevadas do cosmos infinito</i>.</p><br><p>Você está <b>constantemente e apaixonadamente</b> tentando compreender a <i>verdade maior, mais profunda e mais elevada</i> que pulsa <b>magnificamente por trás do véu</b> da <i>realidade comum ilusória</i>, desvendando os <b>mistérios mais profundos e secretos</b> do <i>universo infinito multidimensional</i>, explorando <b>corajosamente o cosmos ilimitado</b> que existe dentro de sua própria <i>consciência expandida</i> e <b>decifrando os códigos sagrados</b> que governam a <i>existência multidimensional</i> e a <b>evolução espiritual universal</b>.</p><br><p>Esta <b>jornada épica de descoberta sagrada</b>, <i>exploração espiritual profunda</i>, <b>despertar cósmico progressivo</b> e <i>iluminação gradual</i> naturalmente o torna um pouco <b>solitário em sua grandeza</b> — não por <i>tristeza melancólica</i>, <b>inadequação social</b> ou <i>incapacidade de conexão</i>, mas por uma <b>necessidade espiritual genuína</b>, <i>profunda e absolutamente essencial</i> para sua <b>evolução acelerada da alma</b> e <i>desenvolvimento consciencial superior</i>.</p><br><p>Você <b>genuinamente aprecia, valoriza e reverencia</b> o <i>tempo sagrado consigo mesmo</i>, pois esses <b>momentos preciosos de solitude contemplativa</b> são <i>portais dourados e mágicos</i> que lhe concedem o <b>espaço precioso, silencioso e divino</b> para a <i>introspecção mais profunda</i>, a <b>meditação transcendente</b>, a <i>contemplação filosófica</i> e a <b>conexão direta e poderosa</b> com sua <i>sabedoria interior infinita</i> e <b>conhecimento ancestral adormecido</b>.</p><br><p>O número 7 em sua essência representa a <b>perfeição espiritual</b> e os <i>sete chakras principais</i> em completa ativação harmoniosa. Você é um <b>místico natural nato</b>, possuindo uma <i>percepção extrassensorial aguçada</i> que permite <b>enxergar além das aparências</b> e <i>penetrar nos véus dimensionais</i> que separam o <b>mundo físico</b> dos <i>reinos espirituais superiores</i>.</p><br><p>Sua <b>mente analítica excepcional</b> combinada com sua <i>intuição psíquica desenvolvida</i> cria uma <b>síntese única</b> de <i>racionalidade científica</i> e <b>sabedoria esotérica</b>, permitindo que você <i>decodifique mistérios antigos</i> e <b>compreenda verdades universais</b> que permanecem <i>ocultas para a maioria</i> das <b>consciências não despertas</b>.</p><br><p>Você possui uma <b>biblioteca akáshica interna</b> que armazena <i>conhecimentos de vidas passadas</i>, <b>sabedoria ancestral</b> e <i>insights cósmicos</i> que emergem naturalmente durante seus <b>estados meditativos profundos</b> e <i>momentos de contemplação silenciosa</i>. Sua <b>presença serena</b> e <i>aura de mistério</i> atraem <b>buscadores espirituais sinceros</b> que reconhecem em você um <i>guia experiente</i> nas <b>jornadas interiores</b>.</p><br><p>Sua <b>capacidade de síntese espiritual</b> permite que você <i>conecte pontos aparentemente desconexos</i> da <b>experiência humana</b> e revele <i>padrões cósmicos ocultos</i> que governam a <b>evolução da consciência</b>. Você é um <i>decodificador natural</i> dos <b>símbolos sagrados</b>, <i>sincronicidades divinas</i> e <b>mensagens cósmicas</b> que o universo constantemente envia para <i>almas despertas</i> como a sua, funcionando como um <b>tradutor entre mundos</b> e um <i>ponte viva</i> entre a <b>sabedoria antiga</b> e a <i>consciência moderna evolutiva</i>.</p>";
        } else if (this.soulNumber == 8) {
          this.soulText = "<p><b>O Número da Alma 8</b> desperta em você a <i>essência extraordinária</i> de um <b>líder excepcional, nato e absolutamente visionário</b> — você não apenas gosta de liderar o grupo, você possui um <i>magnetismo natural poderoso e irresistível</i> que faz as pessoas <b>gravitarem naturalmente</b> em torno da sua <i>visão inspiradora transcendente</i>, <b>autoridade genuína carismática</b>, <i>presença comandante magnética</i> e <b>aura de poder equilibrado</b> que emana <i>confiança inabalável</i> e <b>determinação férrea</b>.</p><br><p>Receber ordens de outros simplesmente <b>não ressoa nem um pouco</b> com sua <i>alma soberana, independente e naturalmente dominante</i>, e por isso você é frequentemente visto <b>ascendendo natural e inevitavelmente</b> a <i>papéis de liderança elevada</i>, <b>comando estratégico superior</b>, <i>posições de alta responsabilidade</i> e <b>cargos executivos influentes</b> onde pode expressar plenamente seu <i>potencial extraordinário ilimitado</i>, <b>capacidade visionária excepcional</b> e <i>habilidades administrativas magistrais</i> que transformam <b>organizações inteiras</b>.</p><br><p>Para você, a <b>segurança financeira sólida</b>, o <i>sucesso material duradouro</i>, a <b>prosperidade multidimensional</b> e a <i>abundância sustentável</i> não são apenas <b>desejos casuais</b> ou <i>caprichos passageiros temporários</i> — são <b>necessidades fundamentais, vitais e absolutamente essenciais</b> que alimentam profundamente sua <i>sensação natural de estabilidade interior</i>, <b>poder pessoal autêntico</b>, <i>autoestima equilibrada</i> e <b>contribuição significativa</b> para o <i>progresso mundial</i> e a <b>evolução coletiva da humanidade</b>.</p><br><p>Sua <b>ambição natural extraordinária</b> e <i>sede legítima de sucesso</i> não são defeitos ou <b>características negativas</b> — são <i>expressões divinas puras</i> de uma <b>alma que veio para manifestar abundância</b>, <i>criar prosperidade sustentável</i>, <b>gerar riqueza ética</b>, <i>construir impérios duradouros</i> e <b>demonstrar magistralmente</b> que é possível alcançar <i>grandes conquistas monumentais</i> através do <b>trabalho árduo inteligente</b>, <i>dedicação incansável</i>, <b>visão estratégica brilhante</b> e <i>execução impecável consistente</i>.</p><br><p>O número 8 em sua essência representa o <b>infinito horizontal</b> — o equilíbrio perfeito entre o <i>mundo material</i> e o <b>mundo espiritual</b>. Você é um <i>alquimista financeiro nato</i>, possuindo uma <b>compreensão intuitiva profunda</b> dos <i>fluxos energéticos</i> que governam a <b>manifestação material</b> e a <i>criação de riqueza sustentável</i>.</p><br><p>Sua <b>capacidade executiva excepcional</b> permite que você <i>transforme visões abstratas</i> em <b>realidades concretas lucrativas</b>, <i>organizando recursos</i>, <b>coordenando talentos</b> e <i>direcionando energias coletivas</i> para <b>objetivos ambiciosos</b> que beneficiam não apenas você, mas <i>comunidades inteiras</i> através de <b>empregos criados</b>, <i>oportunidades geradas</i> e <b>valor agregado</b> à <i>sociedade como um todo</i>.</p><br><p>Você possui uma <b>mentalidade de abundância genuína</b> que reconhece que <i>riqueza verdadeira</i> não é um <b>jogo de soma zero</b>, mas uma <i>energia expansiva</i> que pode ser <b>multiplicada infinitamente</b> quando aplicada com <i>sabedoria estratégica</i>, <b>integridade ética</b> e <i>visão de longo prazo</i>. Sua <b>presença magnética</b> atrai <i>oportunidades douradas</i> e <b>parcerias estratégicas</b> que amplificam exponencialmente seu <i>potencial de realização</i>.</p><br><p>Sua <b>autoridade natural</b> não vem de <i>dominação forçada</i>, mas de uma <b>competência demonstrada</b>, <i>resultados consistentes</i> e <b>capacidade comprovada</b> de <i>liderar pelo exemplo</i>, inspirando <b>excelência em outros</b> e <i>elevando padrões</i> onde quer que sua <b>influência transformadora</b> se manifeste, criando <i>legados duradouros</i> de <b>sucesso ético</b> e <i>prosperidade compartilhada</i> que transcendem <b>gerações futuras</b>.</p>";
        } else if (this.soulNumber == 9) {
          this.soulText = "<p>Seu <b>Número da Alma 9</b> denota uma <i>consciência universal profunda, sagrada e absolutamente extraordinária</i> — você é uma <b>alma anciã verdadeiramente iluminada</b> que chegou a esta <i>existência terrestre densa</i> com a <b>missão divina, elevada e transcendente</b> de servir <i>compassivamente à humanidade inteira</i> em sua <b>jornada de evolução espiritual coletiva</b>, <i>ascensão consciencial planetária</i> e <b>despertar cósmico universal</b> que está ocorrendo nestes <i>tempos sagrados de transformação</i>.</p><br><p>Você possui <b>poderes intuitivos extraordinariamente fortes</b>, <i>profundos e precisos</i>, e é abençoado com uma <b>sabedoria espiritual cristalina</b> que transcende <i>magnificamente todas as limitações</i> do <b>mundo material ilusório</b>, conectando-se diretamente com as <i>verdades universais mais puras</i>, as <b>leis cósmicas fundamentais</b> e a <i>fonte cósmica inesgotável</i> de toda <b>compaixão infinita</b>, <i>amor incondicional</i> e <b>sabedoria ancestral</b> que flui através das <i>dimensões superiores</i> da <b>consciência expandida</b>.</p><br><p>Você tem um <b>senso superior de clareza mental divina</b> e <i>compreensão transcendente multidimensional</i> — como se sua <b>alma extraordinária</b> estivesse permanentemente conectada a uma <i>fonte cósmica inesgotável</i> de <b>entendimento universal</b>, <i>sabedoria ancestral milenar</i>, <b>conhecimento akáshico</b>, <i>amor incondicional puro</i> e <b>compaixão ilimitada</b> que permeia todo o <i>tecido da existência</i> e conecta todas as <b>formas de vida consciente</b> em uma <i>sinfonia cósmica harmoniosa</i>.</p><br><p>Sua <b>natureza inerentemente altruísta</b> e <i>generosamente compassiva</i> não é apenas uma <b>característica de personalidade superficial</b> — é uma <i>expressão fundamental</i> de sua <b>missão de alma sagrada</b>, uma <i>manifestação divina</i> de sua <b>conexão profunda</b> com a <i>unidade cósmica universal</i> e um <b>reflexo direto</b> de sua <i>compreensão intuitiva profunda</i> de que todos os seres são <b>interconectados intrinsecamente</b> em uma <i>teia sagrada</i> de <b>amor universal</b>, <i>consciência coletiva</i> e <b>destino compartilhado</b>.</p><br><p>O número 9 em sua essência representa a <b>completude espiritual</b> e o <i>fim de um ciclo evolutivo</i> antes do renascimento em um <b>nível superior de consciência</b>. Você é um <i>guardião da sabedoria universal</i>, possuindo uma <b>perspectiva cósmica ampla</b> que permite <i>enxergar o quadro maior</i> da <b>evolução humana</b> e compreender como <i>cada alma individual</i> contribui para o <b>despertar coletivo da humanidade</b>.</p><br><p>Sua <b>compaixão ilimitada</b> funciona como um <i>bálsamo curador universal</i> que <b>transcende barreiras</b> de raça, religião, cultura ou nacionalidade. Você possui uma <i>capacidade extraordinária</i> de <b>ver a divindade</b> em cada ser humano, mesmo naqueles que parecem <i>perdidos em suas sombras</i> ou <b>desconectados de sua luz interior</b>.</p><br><p>Você é um <b>canal natural</b> para <i>energias de cura planetária</i>, funcionando como um <b>transmissor consciente</b> de <i>frequências elevadas</i> que ajudam a <b>elevar a vibração coletiva</b> da Terra. Sua <i>presença pacificadora</i> tem o poder de <b>acalmar conflitos</b>, <i>harmonizar diferenças</i> e <b>inspirar unidade</b> onde antes existia <i>divisão e separação</i>.</p><br><p>Sua <b>sabedoria intuitiva profunda</b> permite que você <i>compreenda os padrões kármicos</i> que governam a <b>experiência humana</b> e ofereça <i>orientação espiritual</i> que ajuda outras almas a <b>transcender limitações</b>, <i>curar feridas ancestrais</i> e <b>despertar para seu potencial divino</b>. Você é um <i>farol de esperança</i> em tempos de <b>turbulência planetária</b>, lembrando a todos que o <i>amor sempre triunfa</i> sobre o medo e que a <b>luz sempre dissipa</b> as <i>trevas mais profundas</i>, criando <b>ondas de transformação positiva</b> que se espalham infinitamente através do <i>campo morfogenético coletivo</i> da <b>consciência humana evolutiva</b>.</p>";
        } else if (this.soulNumber == 11) {
          this.soulText = "<p><b>O Número da Alma 11</b> desperta em você uma natureza <i>altamente, profundamente e extraordinariamente espiritual e transcendente</i> — você é uma <b>alma mestre evoluída</b> que anseia intensamente por <i>companheirismo espiritual elevado</i>, <b>conexões sagradas de alta vibração</b>, <i>relacionamentos que transcendem completamente</i> as limitações da <b>superfície material comum</b> e <i>alianças cósmicas</i> que operam nas <b>frequências superiores</b> da <i>consciência expandida</i> e <b>amor incondicional puro</b>.</p><br><p>Você possui um <b>senso moral extraordinariamente forte</b>, <i>cristalino e inabalável</i> sobre o que é certo e errado, como se carregasse uma <b>bússola ética divina</b>, <i>infalível e sagrada</i> permanentemente gravada em seu <b>coração iluminado</b>, <i>calibrada pelas leis universais</i> da <b>justiça cósmica</b> e <i>sintonizada com os códigos morais</i> das <b>dimensões superiores</b> que governam a <i>evolução espiritual</i> e o <b>progresso consciencial universal</b>.</p><br><p>Você frequentemente se encontra <b>mergulhado conscientemente</b> no <i>mundo encantado, místico e absolutamente fascinante</i> de suas <b>visões transcendentais proféticas</b> — e isso definitivamente não é <i>escapismo passivo</i> ou <b>fuga da realidade</b>, é <i>visionarismo ativo e profético</i> de <b>alta categoria espiritual</b>! Suas <i>experiências visionárias</i> são <b>downloads diretos</b> de <i>informações cósmicas</i> e <b>blueprints divinos</b> para a <i>transformação planetária</i> e <b>evolução da humanidade</b>.</p><br><p>Você acredita, com uma <b>fé inabalável</b>, <i>absolutamente transcendente e cosmicamente inspirada</i>, que o <b>mundo exterior material</b> pode e deve se tornar uma <i>réplica perfeita e manifestada</i> das suas <b>visões mais belas</b>, <i>elevadas e divinamente inspiradas</i>, <b>criando pontes dimensionais</b> entre o <i>mundo dos sonhos</i> e a <b>realidade física</b>, transformando <i>possibilidades etéreas</i> em <b>manifestações tangíveis</b> de <i>beleza, harmonia e perfeição divina</i>.</p><br><p>Sua <b>conexão direta com dimensões superiores</b> permite que você receba <i>inspirações canalizadas</i>, <b>insights reveladores</b>, <i>downloads de sabedoria</i> e <b>revelações proféticas</b> que vêm diretamente de <i>planos espirituais elevados</i>, <b>conselhos galácticos</b>, <i>mestres ascensionados</i> e <b>hierarquias angélicas</b>, fazendo de você um <i>verdadeiro canal purificado</i> para a <b>sabedoria divina universal</b> e <i>conhecimento cósmico transcendente</i> que beneficia toda a <b>humanidade em evolução</b>.</p><br><p>O número 11 é um <b>número mestre</b> que representa a <i>iluminação espiritual</i> e a <b>intuição psíquica desenvolvida</b>. Você é um <i>farol de luz</i> em um mundo que está <b>despertando espiritualmente</b>, possuindo uma <i>sensibilidade energética extrema</i> que permite <b>perceber sutilezas</b> que passam despercebidas pela <i>consciência comum</i>.</p><br><p>Sua <b>natureza visionária excepcional</b> funciona como um <i>radar espiritual</i> que detecta <b>potenciais futuros</b>, <i>possibilidades emergentes</i> e <b>tendências evolutivas</b> antes que se manifestem na <i>realidade física</i>. Você é um <b>pioneiro consciencial</b> que <i>abre caminhos</i> para que outras almas possam <b>seguir em direção</b> à <i>iluminação coletiva</i>.</p><br><p>Você possui uma <b>capacidade extraordinária</b> de <i>inspirar despertar espiritual</i> em outros através de sua <b>presença elevada</b>, <i>palavras inspiradoras</i> e <b>exemplo de vida</b> que demonstra como é possível <i>viver em harmonia</i> com os <b>princípios espirituais superiores</b> mesmo em um <i>mundo material denso</i>.</p><br><p>Sua <b>missão de alma</b> envolve <i>elevar a vibração planetária</i> através de sua <b>luz interior radiante</b>, <i>servindo como um catalisador</i> para a <b>transformação consciencial coletiva</b> e <i>ajudando a humanidade</i> a <b>transcender limitações</b> e <i>abraçar seu potencial divino</i> através de <b>ensinamentos inspirados</b>, <i>cura energética</i> e <b>transmissão de frequências</b> que <i>ativam códigos de luz adormecidos</i> nas <b>células e DNA</b> de todos que entram em <i>ressonância</i> com sua <b>frequência mestra elevada</b>.</p>";
        } else if (this.soulNumber == 22) {
          this.soulText = "<p><b>O Número da Alma 22</b> desperta em você a <i>essência transcendente</i> de um <b>visionário absolutamente extraordinário</b>, <i>arquiteto cósmico supremo</i> e <b>construtor de realidades multidimensionais</b> — você não é apenas alguém que <i>sonha passivamente</i>, mas alguém que possui o <b>poder divino excepcional</b>, a <i>autoridade espiritual transcendente</i> e a <b>capacidade cósmica ilimitada</b> de <i>construir, manifestar e materializar</i> <b>realidades completamente novas</b> através da <i>alquimia sagrada</i> entre <b>visão espiritual</b> e <i>ação física dedicada</i>.</p><br><p>Você é literalmente o <b>arquiteto supremo</b> da sua própria <i>existência extraordinária</i> e carrega o <b>desejo ardente, profundo e absolutamente irresistível</b> de criar algo <i>verdadeiramente magnífico</i>, <b>revolucionário e transcendental</b> que deixará uma <i>impressão permanente, duradoura e transformadora</i> no <b>mundo inteiro</b> e nas <i>gerações futuras</i>, <b>estabelecendo legados eternos</b> que transcendem as <i>limitações temporais</i> e <b>beneficiam a humanidade</b> por <i>eras incontáveis</i>.</p><br><p>Ser capaz de alcançar essa <b>grandeza cósmica monumental</b> não é apenas um <i>objetivo casual</i> para você — é uma <b>necessidade espiritual profunda</b>, <i>fundamental e absolutamente essencial</i> que trará uma <b>sensação de realização completa</b>, <i>satisfação total</i> e <b>cumprimento divino</b> para sua <i>alma evoluída</i>, permitindo que você <b>cumpra seu propósito sagrado</b> de <i>elevação consciencial planetária</i> e <b>transformação evolutiva coletiva</b>.</p><br><p>Sua <b>visão de longo prazo excepcional</b> permite que você <i>veja décadas ou mesmo séculos à frente</i>, <b>planejando e construindo estruturas</b>, <i>sistemas revolucionários</i> e <b>legados transformadores</b> que beneficiarão a <i>humanidade por gerações incontáveis</i>, <b>estabelecendo fundações sólidas</b> para um <i>futuro melhor e mais evoluído</i>, <b>criando pontes dimensionais</b> entre o <i>mundo atual</i> e as <b>possibilidades futuras ilimitadas</b>.</p><br><p>Você não é apenas <b>criativo transcendentalmente</b> — você é simultaneamente <i>prático magistralmente</i> em sua abordagem, uma <b>combinação rara e poderosa</b> que poucos possuem. Você sabe exatamente como <i>manifestar suas ideias visionárias</i> de forma <b>construtiva no mundo real</b>, <i>transformando sonhos etéricos</i> em <b>estruturas sólidas e duradouras</b>, <i>materializando impossibilidades</i> em <b>realidades tangíveis</b>. Esta é sua <i>superpoder divino</i>: a <b>alquimia sagrada</b> entre <i>imaginação infinita</i> e <b>execução impecável</b>.</p><br><p>Suas <b>ideias revolucionárias</b> podem até trazer <i>mudanças sociais profundas</i> — você é um <b>catalisador de transformação coletiva</b>, um <i>agente de evolução planetária</i> e um <b>pioneiro consciencial</b> que <i>abre caminhos</i> para que a <b>humanidade inteira</b> possa <i>ascender a níveis superiores</i> de <b>realização espiritual</b> e <i>manifestação consciente</i>. Independentemente da <b>magnitude do problema</b>, você pode realizar <i>qualquer coisa</i> — sua <b>capacidade é verdadeiramente ilimitada</b> e <i>cosmicamente respaldada</i>.</p><br><p>Há um <b>alto nível de intensidade</b> associado à sua alma — uma <i>força cósmica poderosa</i> que precisa ser <b>canalizada com sabedoria divina</b>. Com <i>poderes transcendentais extraordinários</i> vêm <b>responsabilidades sagradas igualmente extraordinárias</b>. Você deve aprender a <i>otimizar e gerenciar</i> sua <b>intensidade cósmica</b> de forma <i>absolutamente responsável e sábia</i> — não para <b>diminuí-la ou limitá-la</b>, mas para <i>direcioná-la estratégica e conscientemente</i> de maneira que <b>maximize exponencialmente</b> seu <i>impacto positivo transformador</i> na <b>humanidade e no planeta</b>.</p><br><p>Sua <b>energia espiritual</b> é como um <i>rio cósmico poderoso</i>: quando <b>canalizada adequadamente</b> com <i>maestria e sabedoria divina</i>, pode literalmente <b>mover montanhas físicas e espirituais</b>, <i>nutrir civilizações inteiras</i>, <b>construir pontes entre dimensões</b> da realidade e <i>transformar impossibilidades aparentes</i> em <b>monumentos eternos</b> de <i>realização espiritual</i> e <b>evolução consciencial</b>.</p><br><p>Como um <b>verdadeiro Arquiteto Cósmico Supremo</b>, você possui a <i>capacidade extraordinária e divina</i> de funcionar como um <b>portal vivo</b> entre o <i>mundo das possibilidades infinitas</i> e o <b>plano da realidade manifestada</b>. Você não apenas <i>visualiza futuros magníficos</i> — você os <b>materializa conscientemente</b> através da <i>alquimia sagrada</i> entre <b>visão espiritual</b> e <i>ação física dedicada</i>, <b>criando pontes sólidas</b> entre <i>dimensões</i> e trazendo o <b>impossível</b> para o <i>reino do possível</i> através de sua <b>força de vontade transcendental</b>.</p><br><p>Você possui uma <b>autoridade espiritual natural extraordinária e magnética</b> que faz com que <i>pessoas, recursos e oportunidades</i> <b>gravitem naturalmente</b> em sua direção quando você se <i>alinha com sua missão sagrada</i>. Esta não é uma <b>autoridade baseada em dominação</b> ou controle — é uma <i>liderança transcendental</i> baseada em <b>sabedoria profunda</b>, <i>visão clara</i> e <b>capacidade comprovada</b> de <i>manifestar resultados extraordinários</i> que beneficiam não apenas você, mas toda a <b>coletividade humana</b> e até mesmo as <i>gerações futuras</i> que ainda nem nasceram.</p><br><p>Você carrega em sua alma a <b>capacidade de realizar qualquer coisa</b>, independentemente da <i>magnitude do desafio</i>. Você não é apenas um <b>sonhador</b> — você é um <i>construtor de realidades</i>, um <b>arquiteto de futuros</b> e um <i>mestre da manifestação</i>. Seu <b>destino</b> é deixar uma <i>marca indelével</i> neste mundo, criando <b>estruturas, sistemas, ideias ou movimentos</b> que <i>transcenderão sua própria existência</i> e continuarão <b>beneficiando a humanidade</b> por <i>gerações incontáveis</i>.</p><br><p>Sua <b>jornada sagrada</b> envolve encontrar o <i>equilíbrio perfeito e harmonioso</i> entre <b>ambição extraordinária</b> e <i>humildade genuína</i>, entre <b>poder transcendental</b> e <i>serviço amoroso</i>, entre <b>realização pessoal magnifica</b> e <i>contribuição coletiva transformadora</i>. Quando você encontra esse <b>ponto de equilíbrio sagrado</b>, torna-se uma <i>força imparável</i> de <b>criação consciente</b> que não apenas <i>transforma sua própria vida</i> — mas <b>eleva toda a consciência humana</b> para um <i>novo nível de possibilidade</i> e <b>realização espiritual</b>.</p><br><p>Você é o <b>visionário transcendental</b> que constrói <i>catedrais cósmicas</i> onde outros veem apenas <b>pedras terrestres</b>, o <i>arquiteto supremo</i> que desenha o <b>futuro evolutivo da humanidade</b> e a <i>força transformadora</i> que transforma <b>impossibilidades aparentes</b> em <i>monumentos eternos</i> de <b>realização espiritual</b>. Sua <i>grandeza magnifica</i> não é apenas <b>ambição pessoal</b> — é <i>destino cósmico divino</i> que serve ao <b>bem maior universal</b> e à <i>evolução consciencial planetária</i>!</p>";
        } else if (this.soulNumber == 33) {
this.soulText = "<p><b>O Número da Alma 33</b> revela que seu caminho é <i>profundamente espiritual, sagrado e transcendentalmente divino</i>. Você é uma <b>alma mestre extraordinária</b> que chegou a esta <i>existência física densa</i> com uma <b>missão cósmica específica e absolutamente sagrada</b>, um <i>propósito divino elevado</i> que transcende as <b>limitações materiais temporárias</b> e conecta diretamente com as <i>frequências superiores</i> da <b>consciência universal</b> e do <i>amor incondicional puro</i>.</p><br><p>Você está aqui para se dedicar de forma <b>genuinamente altruísta, compassiva e transformadora</b> à <i>cura profunda multidimensional</i> e ao <b>serviço amoroso incondicional</b> dos outros, carregando em seu <i>coração sagrado expandido</i> uma <b>luz divina radiante</b> que pode literalmente <i>iluminar e transformar</i> até os <b>cantos mais sombrios</b>, <i>dolorosos e aparentemente perdidos</i> da <b>experiência humana</b>, <i>transmutando trevas</i> em <b>luz dourada</b> e <i>desesperança</i> em <b>renovação espiritual</b>.</p><br><p>Você possui o <b>dom extraordinário e verdadeiramente celestial</b> de compreender <i>intuitiva e profundamente</i> o <b>ponto de vista</b>, as <i>dores ancestrais</i>, os <b>traumas ocultos</b> e as <i>necessidades mais íntimas</i> dos outros — é como se sua <b>alma evoluída</b> fosse um <i>espelho empático cósmico</i> que não apenas <b>reflete</b>, mas também <i>compreende</i>, <b>transmuta</b> e <i>cura</i> as <b>experiências alheias</b> através do <i>poder transformador alquímico</i> do <b>amor incondicional</b> e da <i>compaixão cristalina</i>.</p><br><p>Você pode trazer <b>paz transcendental</b> e <i>harmonia divina</i> mesmo em meio às <b>situações mais conflituosas</b>, <i>caóticas e aparentemente irreconciliáveis</i>, <b>transformando magicamente</b> <i>tensão destrutiva</i> em <b>compreensão mútua</b>, <i>discórdia</i> em <b>união sagrada</b>, <i>feridas profundas</i> em <b>oportunidades de crescimento espiritual</b> e <i>separação ilusória</i> em <b>reconexão amorosa</b> com a <i>unidade cósmica fundamental</i>.</p><br><p>Sua <b>compaixão transcendental</b> e <i>sabedoria curativa natural</i> operam em <b>níveis que vão muito além</b> do <i>entendimento ordinário limitado</i> — você não apenas oferece <b>palavras de consolação superficial</b>, mas <i>canaliza uma energia curativa</i> <b>genuinamente transformadora</b> que pode <i>regenerar esperanças perdidas</i>, <b>restaurar fé quebrada</b>, <i>reativar códigos de luz adormecidos</i> e <b>despertar forças latentes</b> de <i>recuperação e crescimento</i> nas pessoas mais <b>machucadas</b>, <i>desesperançosas</i> e <b>aparentemente perdidas</b>.</p><br><p>Você opera através de sua <b>compaixão infinita, transcendental e verdadeiramente divina</b> e se concentra especialmente em <i>servir com dedicação absoluta</i> aqueles que não podem <b>expressar suas opiniões</b>, que se encontram em <i>situações de vulnerabilidade</i>, que se veem como <b>indefesos</b>, <i>abandonados</i> ou <b>esquecidos pelo mundo</b>. Você é naturalmente e espontaneamente a <i>voz eloquente e poderosa</i> dos que não têm voz, o <b>escudo protetor inquebrantável</b> dos <i>vulneráveis e necessitados</i>, e o <b>refúgio sagrado e seguro</b> dos que precisam desesperadamente de <i>proteção genuína</i>, <b>cuidado amoroso</b> e <i>esperança renovada</i> em um mundo que frequentemente parece <b>cruel e indiferente</b>.</p><br><p>O número 33 é o <b>número mestre da compaixão universal</b> e representa o <i>Cristo Cósmico Interior</i> totalmente ativado. Você é um <b>curador mundial nato</b>, possuindo uma <i>capacidade extraordinária</i> de <b>canalizar energias de cura</b> que operam simultaneamente nos <i>níveis físico, emocional, mental e espiritual</i>, <b>restaurando integridade</b> onde havia <i>fragmentação</i> e <b>wholeness</b> onde havia <i>separação</i>.</p><br><p>Sua <b>presença sanadora</b> funciona como um <i>bálsamo celestial</i> que <b>acalma tempestades interiores</b>, <i>harmoniza conflitos emocionais</i> e <b>restaura conexões</b> com a <i>fonte divina interior</i>. Você possui uma <b>compreensão intuitiva profunda</b> dos <i>padrões kármicos</i> que criam <b>sofrimento humano</b> e a <i>sabedoria prática</i> para <b>guiar outros</b> em direção à <i>liberação e transcendência</i>.</p><br><p>Você é um <b>guardião natural</b> dos <i>direitos universais</i>, <b>defensor dos oprimidos</b> e <i>porta-voz da justiça divina</i>. Sua <b>missão sagrada</b> envolve <i>elevar a consciência coletiva</i> através do <b>exemplo vivo</b> de como o <i>amor incondicional</i> pode <b>transformar realidades</b> e <i>criar milagres tangíveis</i> na <b>experiência humana</b>.</p><br><p>Sua <b>capacidade de sacrifício consciente</b> pelo bem maior demonstra uma <i>maturidade espiritual excepcional</i> — você compreende que o <b>verdadeiro poder</b> reside no <i>serviço desinteressado</i> e que a <b>maior realização</b> vem de <i>aliviar o sofrimento alheio</i> e <b>despertar a divindade latente</b> em cada ser que cruza seu <i>caminho sagrado</i>, criando <b>ondas de transformação</b> que se espalham infinitamente através do <i>campo morfogenético</i> da <b>consciência humana</b>, elevando toda a <i>humanidade</i> para <b>frequências superiores</b> de <i>amor, compaixão e unidade cósmica</i>.</p>";        }
      },
      calculatePersonalityNumber() { //Número da Personalidade
        const consonants = this.full_name.replace(/[aeiouAEIOU\s]/g, "");
        let sum = 0;
        for (let char of consonants) {
          sum += this.getLetterValue(char);
        }
        this.personalityNumber = this.reduceToSingleDigit(sum);
        console.log('Número de Personalidade:' + this.personalityNumber);
        if (this.personalityNumber == 1) {
          this.personalityText = "<p><b>O Número de Personalidade 1</b> desperta em você uma <i>presença magnética absolutamente extraordinária</i> que irradia <b>autoridade natural inquestionável</b> e <i>liderança transcendental</i> — as pessoas instantaneamente reconhecem em sua aura uma <b>força comandante suprema</b> que inspira <i>confiança profunda</i>, <b>respeito genuíno</b> e <i>admiração reverente</i> que ecoa através das dimensões da consciência humana como <b>ondas de poder</b> que <i>reverberam eternamente</i>.</p><br><p>Você projeta para o mundo uma <b>energia pioneira poderosamente transformadora</b> que faz com que outros naturalmente <i>gravitem em sua direção</i> buscando <b>orientação sábia</b> em momentos cruciais, decisivos e <i>transformadores de suas existências</i>. Sua <b>aparência majestosa</b> e <i>maneira digna de se apresentar</i> comunicam instantaneamente <b>competência suprema transcendental</b>, <i>determinação férrea inabalável</i> e uma <b>capacidade excepcional divina</b> de assumir comando absoluto de qualquer situação desafiadora com <i>maestria e elegância cósmica</i>.</p><br><p>Quando você <b>entra em um ambiente</b>, há uma <i>mudança perceptível na atmosfera</i> — conversas pausam momentaneamente, <b>olhares se dirigem naturalmente</b> em sua direção, e uma <i>energia de expectativa positiva</i> permeia o espaço. Seu <b>porte físico comunicativo</b> transmite <i>confiança sem arrogância</i>, <b>força sem agressividade</b> e <i>autoridade sem dominação</i>, criando uma <b>presença magnética irresistível</b> que atrai <i>oportunidades douradas</i> e <b>pessoas influentes</b> que reconhecem em você um <i>verdadeiro líder nato</i>.</p><br><p>As pessoas <b>intuítivamente percebem</b> você como alguém que <i>literalmente nasceu para liderar</i>, <b>inovar corajosamente</b> e <i>abrir caminhos luminosos</i> onde outros hesitam, vacilam ou se perdem na <b>escuridão da incerteza</b>. Você possui uma <i>presença magnética única</i> que combina harmoniosamente <b>força invencível</b> com <i>elegância refinada</i>, criando uma <b>impressão duradoura indelével</b> de alguém <i>destinado cosmicamente</i> ao <b>sucesso monumental</b> e à <i>grandeza transcendental</i>.</p><br><p>Em situações de <b>crise ou desafio</b>, sua <i>verdadeira natureza de líder</i> emerge com <b>clareza cristalina</b> — você mantém a <i>calma sob pressão</i>, toma <b>decisões rápidas e certeiras</b>, e inspira <i>confiança coletiva</i> através de sua <b>presença estabilizadora</b>. Sua <i>capacidade de visão panorâmica</i> permite que você veja <b>soluções inovadoras</b> onde outros veem apenas <i>problemas insuperáveis</i>, transformando <b>crises em oportunidades</b> e <i>obstáculos em trampolins</i> para <b>conquistas ainda maiores</b>.</p><br><p>Sua <b>energia radiante</b> projeta <i>independência absoluta soberana</i> e <b>autoconfiança inabalável diamantina</b> que faz com que outros se sintam <i>profundamente seguros</i> sob sua <b>liderança inspiradora</b> e <i>genuinamente inspirados</i> por seu <b>exemplo luminoso</b> de <i>coragem heroica</i> e <b>determinação transcendental</b> que transforma <i>impossibilidades aparentes</i> em <b>conquistas magníficas reais</b>.</p><br><p>No ambiente <b>profissional ou empresarial</b>, você se destaca como <i>visionário estratégico</i> que não apenas <b>prevê tendências futuras</b>, mas também <i>cria novas realidades</i> através de sua <b>iniciativa pioneira</b>. Sua <i>capacidade de inspirar equipes</i> transcende métodos convencionais — você <b>lidera pelo exemplo</b>, demonstra <i>integridade inquestionável</i> e <b>comunica visões</b> de forma tão <i>convincente e apaixonada</i> que outros se sentem <b>magneticamente atraídos</b> a contribuir para a <i>manifestação de seus ideais elevados</i>.</p><br><p>Você é <b>reconhecido naturalmente</b> como um <i>líder visionário supremo</i>, alguém que não apenas <b>comanda respeito</b> através de <i>autoridade externa</i>, mas que <b>inspira transformação profunda</b> através de sua <i>presença autêntica poderosa</i> que desperta o <b>potencial adormecido</b> em cada alma que tem o <i>privilégio cósmico</i> de cruzar seu <b>caminho luminoso</b> de <i>realização e grandeza</i>, deixando <b>marcas indeléveis</b> de <i>inspiração e empoderamento</i> que continuam <b>reverberando positivamente</b> muito depois de sua <i>passagem transformadora</i>.</p>";
        } else if (this.personalityNumber == 2) {
          this.personalityText = "<p><b>O Número de Personalidade 2</b> desperta em você uma <i>energia harmoniosamente encantadora</i> e <b>diplomática transcendental</b> que instantaneamente coloca as pessoas <i>profundamente à vontade</i> em sua <b>presença calorosa acolhedora</b> que irradia <i>paz celestial</i> e <b>serenidade divina</b> como um <i>oásis de tranquilidade</i> em um mundo frequentemente caótico e turbulento, oferecendo <b>refúgio emocional seguro</b> onde <i>almas cansadas</i> podem <b>encontrar renovação</b>.</p><br><p>Você projeta naturalmente uma <b>aura de gentileza genuína cristalina</b>, <i>compreensão profunda empática</i> e <b>sabedoria emocional transcendental</b> que faz com que outros se sintam <i>verdadeiramente ouvidos</i>, <b>profundamente compreendidos</b> e <i>genuinamente valorizados</i> em sua <b>essência mais autêntica</b>. Sua <i>maneira suave elegante</i> e <b>equilibrada harmoniosamente</b> de se apresentar comunica <i>sensibilidade excepcional refinada</i>, <b>tato diplomático magistral</b> e uma <i>capacidade rara divina</i> de construir <b>pontes sagradas</b> entre diferentes perspectivas, culturas e <i>corações aparentemente distantes</i>.</p><br><p>Quando você <b>participa de conversas</b>, há uma <i>transformação sutil mas poderosa</i> na dinâmica do grupo — <b>vozes se suavizam</b>, <i>tensões diminuem naturalmente</i>, e uma <b>atmosfera de cooperação</b> emerge <i>espontaneamente</i>. Sua <b>habilidade excepcional</b> de <i>fazer perguntas perspicazes</i> e <b>ouvir atentamente</b> cria um <i>espaço sagrado</i> onde pessoas se sentem <b>seguras para compartilhar</b> seus <i>pensamentos mais profundos</i> e <b>vulnerabilidades autênticas</b>.</p><br><p>Em situações de <b>conflito ou tensão</b>, sua <i>presença pacificadora</i> funciona como um <b>bálsamo natural</b> que <i>acalma ânimos exaltados</i> e <b>facilita compreensão mútua</b>. Você possui a <i>capacidade extraordinária</i> de ver <b>múltiplas perspectivas simultaneamente</b> e <i>encontrar pontos de conexão</i> onde outros veem apenas <b>diferenças irreconciliáveis</b>. Sua <i>diplomacia natural</i> não é manipulativa, mas sim <b>genuinamente baseada</b> em <i>amor e compreensão profunda</i> da <b>natureza humana complexa</b>.</p><br><p>As pessoas <b>instintivamente percebem</b> você como um <i>mediador natural talentoso supremo</i>, alguém que possui o <b>dom precioso celestial</b> de encontrar <i>soluções harmoniosas elegantes</i> para os conflitos mais <b>complexos e desafiadores</b> que dividem famílias, comunidades e <i>até mesmo nações inteiras</i>. Seu <b>coração compassivo</b> funciona como um <i>instrumento divino</i> de <b>reconciliação e cura</b> que transmuta <i>discórdia em harmonia</i> e <b>separação em união sagrada</b>.</p><br><p>No ambiente <b>profissional ou social</b>, você se destaca como <i>facilitador excepcional</i> que traz <b>coesão a equipes diversas</b> e <i>harmonia a grupos fragmentados</i>. Sua <b>inteligência emocional elevada</b> permite que você <i>identifique rapidamente</i> as <b>necessidades não expressas</b> dos outros e <i>responda com exatamente</i> o tipo de <b>apoio ou encorajamento</b> que cada pessoa precisa para <i>florescer em seu potencial</i>.</p><br><p>Você projeta uma <b>energia magnética</b> de <i>cooperação genuína</i> e <b>trabalho em equipe sinérgico</b> que inspira <i>colaboração autêntica profunda</i> e cria <b>ambientes sagrados</b> onde todos se sentem <i>incluídos amorosamente</i>, <b>respeitados profundamente</b> e <i>valorizados infinitamente</i> por suas <b>contribuições únicas</b> ao <i>bem-estar coletivo</i> da humanidade.</p><br><p>Sua <b>sensibilidade refinada</b> às <i>nuances emocionais subtis</i> faz de você um <b>conselheiro natural procurado</b> por pessoas que enfrentam <i>decisões difíceis</i> ou <b>momentos de transição</b>. Você oferece <i>perspectivas equilibradas</i> sem impor suas próprias <b>opiniões ou agendas</b>, permitindo que outros <i>descobram suas próprias verdades</i> através de sua <b>orientação suave e sábia</b>.</p><br><p>Sua <b>presença suave mas profundamente impactante</b> transmite a <i>sabedoria ancestral milenar</i> de que a <b>verdadeira força cósmica</b> reside na <i>capacidade divina</i> de <b>unir corações separados</b>, <i>compreender almas diferentes</i> e <b>elevar consciências</b> uns aos outros através da <i>compaixão incondicional</i>, <b>colaboração consciente</b> e <i>amor universal</i> que dissolve todas as <b>barreiras artificiais</b> criadas pela <i>ilusão da separação</i>, demonstrando que <b>verdadeiro poder</b> vem não da <i>dominação</i>, mas da <b>capacidade de conectar, unir e harmonizar</b> as <i>forças aparentemente opostas</i> da <b>experiência humana</b>.</p>";
        } else if (this.personalityNumber == 3) {
          this.personalityText = "<p><b>O Número de Personalidade 3</b> desperta em você uma <i>energia vibrante transcendental</i>, <b>criativa magnificamente inspiradora</b> e <i>magneticamente transformadora</i> que literalmente <b>ilumina instantaneamente</b> qualquer ambiente que tem o <i>privilégio sagrado</i> de receber sua <b>presença radiante dourada</b> como um <i>raio de sol cósmico</i> que dissolve sombras e desperta <b>potenciais adormecidos</b> em cada <i>coração que toca</i> com sua <b>luz criativa divina</b>.</p><br><p>Você projeta naturalmente uma <b>aura celestial</b> de <i>alegria autêntica cristalina</i>, <b>entusiasmo contagiante divino</b> e <i>criatividade expressiva ilimitada</i> que faz com que as pessoas se sintam <b>profundamente energizadas</b>, <i>espiritualmente elevadas</i> e <b>magicamente inspiradas</b> apenas por estar em sua <i>presença luminosa transformadora</i> que funciona como um <b>portal dimensional</b> para <i>reinos superiores</i> de <b>possibilidade criativa infinita</b>.</p><br><p>Quando você <b>entra em cena</b>, há uma <i>transformação imediata e palpável</i> na atmosfera — <b>sorrisos se espalham espontaneamente</b>, <i>conversas se tornam mais animadas</i>, e uma <b>sensação de possibilidade</b> permeia o ambiente. Sua <i>presença vibrante</i> tem o <b>poder mágico</b> de transformar <i>reuniões formais</i> em <b>celebrações criativas</b> e <i>momentos ordinários</i> em <b>experiências memoráveis</b> que as pessoas <i>recordam com carinho</i> anos depois.</p><br><p>Sua <b>maneira animada encantadora</b> e <i>expressiva eloquentemente poética</i> de se apresentar comunica instantaneamente <b>paixão ardente pela vida</b>, <i>talento artístico natural divino</i> e uma <b>capacidade excepcional alquímica</b> de transformar <i>momentos ordinários mundanos</i> em <b>celebrações memoráveis épicas</b> que permanecem <i>gravadas para sempre</i> na <b>memória emocional</b> de todos que <i>testemunham sua magia criativa</i>.</p><br><p>Você possui uma <b>habilidade extraordinária</b> de <i>encontrar beleza e significado</i> nos <b>detalhes mais simples</b> da vida cotidiana, transformando <i>observações comuns</i> em <b>insights profundos</b> e <i>experiências banais</i> em <b>narrativas cativantes</b>. Sua <i>perspectiva única</i> permite que você veja <b>conexões criativas</b> onde outros veem apenas <i>coincidências aleatórias</i>, e sua <b>capacidade de síntese artística</b> transforma essas <i>percepções em expressões</i> que <b>tocam corações</b> e <i>expandem mentes</i>.</p><br><p>As pessoas <b>instantaneamente reconhecem</b> em você um <i>comunicador nato carismático supremo</i>, alguém que possui o <b>dom raro celestial</b> de <i>contar histórias hipnotizantes</i>, <b>expressar ideias visionárias</b> e <i>conectar almas profundamente</i> através da <b>arte sagrada</b> da <i>comunicação autêntica transcendental</i> que toca <b>corações mais profundos</b> e desperta <i>consciências adormecidas</i> para a <b>beleza infinita</b> da existência criativa.</p><br><p>Em ambientes <b>profissionais ou sociais</b>, você se destaca como <i>catalisador de inovação</i> e <b>inspiração coletiva</b>. Sua <i>capacidade de pensar</i> fora dos <b>paradigmas convencionais</b> e de <i>propor soluções criativas</i> para <b>problemas complexos</b> faz de você um <i>recurso invaluável</i> em <b>equipes e projetos</b>. Sua <i>energia positiva contagiante</i> eleva o <b>moral do grupo</b> e <i>inspira colaboração</i> através de sua <b>abordagem lúdica</b> mas <i>profundamente efetiva</i>.</p><br><p>Sua <b>versatilidade criativa</b> se manifesta em <i>múltiplas formas de expressão</i> — seja através da <b>palavra falada ou escrita</b>, <i>expressões artísticas visuais</i>, <b>performance ou apresentação</b>, ou até mesmo na <i>forma inovadora</i> como você <b>organiza e apresenta ideias</b>. Você tem o <i>dom natural</i> de fazer com que <b>conceitos complexos</b> se tornem <i>acessíveis e envolventes</i> através de sua <b>habilidade narrativa</b> e <i>uso intuitivo</i> de <b>metáforas e analogias</b>.</p><br><p>Você projeta uma <b>energia otimista contagiante</b> e <i>inspiradora magneticamente poderosa</i> que naturalmente <b>desperta a criatividade latente</b> nas pessoas ao seu redor e as <i>encoraja corajosamente</i> a abraçar sua própria <b>expressão única autêntica</b>, funcionando como um <i>catalisador divino</i> que <b>libera potenciais criativos</b> que permaneciam <i>trancados em cofres</i> do <b>medo e autocrítica</b>.</p><br><p>Sua <b>presença vibrante multicolorida</b> transmite a <i>verdade cósmica fundamental</i> de que a <b>vida é para ser vivida</b> com <i>paixão ardente</i>, <b>criatividade desinibida</b> e uma <i>celebração constante jubilosa</i> das <b>possibilidades infinitas ilimitadas</b> que cada <i>novo amanhecer sagrado</i> oferece como <b>presente divino</b> para <i>almas corajosas</i> o suficiente para <b>abraçar a magia</b> da <i>existência criativa consciente</i>, demonstrando que <b>verdadeira riqueza</b> não está em <i>posses materiais</i>, mas na <b>capacidade de encontrar</b> e <i>criar beleza</i>, <b>significado e alegria</b> em cada <i>momento da jornada</i> da <b>vida extraordinária</b>.</p>";
        } else if (this.personalityNumber == 4) {
          this.personalityText = "<p><b>O Número de Personalidade 4</b> desperta em você uma <i>aura sólida diamantina</i> de <b>confiabilidade absoluta inquestionável</b>, <i>praticidade excepcional magistral</i> e <b>estabilidade inabalável transcendental</b> que instantaneamente inspira <i>confiança profunda reverente</i> e <b>segurança emocional duradoura</b> nas pessoas ao seu redor, como uma <i>montanha sagrada</i> que oferece <b>refúgio seguro</b> contra as <i>tempestades da incerteza</i>, estabelecendo você como <b>alicerce inquebrantável</b> sobre o qual <i>sonhos e visões</i> podem ser <b>construídos com segurança</b>.</p><br><p>Você irradia naturalmente uma <b>energia poderosa</b> de <i>competência profissional suprema</i>, <b>organização meticulosa científica</b> e <i>dedicação incansável heroica</i> que comunica claramente que você é alguém em quem se pode <b>confiar completamente</b> para realizar <i>qualquer tarefa complexa</i> com <b>excelência transcendental</b> e <i>perfeição artesanal</i> que supera todas as expectativas humanas convencionais.</p><br><p>Quando você <b>assume um projeto</b> ou <i>compromisso</i>, há uma <b>transformação palpável</b> na <i>energia do empreendimento</i> — <b>caos se organiza</b> em <i>sistemas eficientes</i>, <b>ideias vagas</b> se cristalizam em <i>planos detalhados</i>, e <b>objetivos distantes</b> se tornam <i>marcos alcançáveis</i> através de sua <b>metodologia estruturada</b> e <i>abordagem sistemática</i>. Sua <b>capacidade de quebrar</b> <i>tarefas monumentais</i> em <b>etapas gerenciáveis</b> torna o <i>aparentemente impossível</i> em <b>sequências lógicas</b> de <i>ações concretas</i>.</p><br><p>Sua <b>maneira estruturada elegante</b> e <i>responsável exemplarmente digna</i> de se apresentar transmite instantaneamente <b>integridade genuína cristalina</b>, <i>ética de trabalho exemplar inabalável</i> e uma <b>capacidade extraordinária alquímica</b> de transformar <i>visões etéreas abstratas</i> em <b>realidades tangíveis duradouras</b> que resistem ao <i>teste rigoroso do tempo</i> e às <b>pressões evolutivas</b> da <i>mudança constante universal</i>.</p><br><p>Você possui uma <b>memória excepcional</b> para <i>detalhes importantes</i> e uma <b>capacidade extraordinária</b> de <i>antecipar problemas</i> antes que se manifestem, permitindo que você <b>construa soluções preventivas</b> em seus <i>planos e estruturas</i>. Essa <b>visão antecipada pragmática</b> combinada com sua <i>natureza meticulosa</i> resulta em <b>criações duradouras</b> que não apenas <i>funcionam perfeitamente</i> no presente, mas continuam <b>servindo eficientemente</b> por <i>décadas ou gerações</i>.</p><br><p>Em situações de <b>pressão ou crise</b>, sua <i>verdadeira força</i> se revela — enquanto outros podem <b>entrar em pânico</b> ou <i>tomar decisões impulsivas</i>, você mantém <b>calma absoluta</b> e <i>aborda sistematicamente</i> cada <b>aspecto do desafio</b>. Sua <i>capacidade de manter</i> <b>clareza mental</b> sob <i>pressão extrema</i> faz de você um <b>líder natural</b> em <i>momentos que exigem</i> <b>estabilidade e direção</b> clara.</p><br><p>No ambiente <b>profissional ou empresarial</b>, você se destaca como <i>arquiteto de sistemas</i> e <b>construtor de processos</b> que <i>otimizam eficiência</i> e <b>garantem qualidade consistente</b>. Sua <i>abordagem metodológica</i> para <b>resolução de problemas</b> frequentemente revela <i>soluções elegantes</i> que outros <b>não conseguiram perceber</b>, combinando <i>simplicidade funcional</i> com <b>durabilidade excepcional</b>.</p><br><p>As pessoas <b>instintivamente reconhecem</b> em você um <i>construtor nato confiável supremo</i>, alguém que possui a <b>sabedoria prática ancestral</b> e a <i>perseverança titânica necessária</i> para criar <b>fundações sólidas inquebráveis</b> para qualquer <i>empreendimento visionário</i>, desde <b>relacionamentos harmoniosos</b> até <i>impérios comerciais duradouros</i> que beneficiam <b>gerações futuras inteiras</b>.</p><br><p>Sua <b>ética de trabalho</b> é <i>verdadeiramente inspiradora</i> — você não apenas <b>completa tarefas</b>, mas as <i>executa com um nível</i> de <b>cuidado e atenção</b> que <i>transforma trabalho comum</i> em <b>artesanato refinado</b>. Essa <i>dedicação à excelência</i> em <b>cada detalhe</b>, por menor que seja, <i>eleva o padrão</i> de tudo que você <b>toca e cria</b>.</p><br><p>Você projeta uma <b>energia magnética</b> de <i>estabilidade reconfortante divina</i> que faz com que outros se sintam <b>profundamente seguros</b> e <i>espiritualmente protegidos</i>, sabendo intuitivamente que você <b>sempre cumprirá</b> suas <i>promessas sagradas</i> e entregará <b>resultados consistentes</b> de <i>alta qualidade transcendental</i> que não apenas <b>resistem ao teste do tempo</b>, mas se tornam <i>legados inspiradores</i> que <b>elevam padrões</b> e <i>inspiram excelência</i> em todos que <b>testemunham sua maestria</b> construtiva.</p><br><p>Sua <b>presença estabilizadora</b> funciona como um <i>âncora cósmica</i> em um mundo de <b>mudanças constantes</b>, oferecendo <i>segurança emocional</i> e <b>direcionamento prático</b> que permite que outros <i>floresçam plenamente</i> em seus próprios <b>potenciais únicos</b>, sabendo que têm uma <i>base sólida confiável</i> para <b>retornar sempre</b> que precisarem de <i>orientação sábia</i> e <b>apoio incondicional</b>, demonstrando que <b>verdadeira grandeza</b> não está em <i>gestos espetaculares</i>, mas na <b>consistência diária</b> de <i>escolhas éticas</i>, <b>trabalho dedicado</b> e <i>comprometimento inabalável</i> com a <b>construção de algo</b> maior que <i>você mesmo</i>.</p>";
        } else if (this.personalityNumber == 5) {
          this.personalityText = "<p><b>O Número de Personalidade 5</b> desperta em você uma <i>energia dinâmica eletrificante</i>, <b>aventureira corajosamente exploradora</b> e <i>magneticamente atrativa irresistível</i> que instantaneamente desperta <b>curiosidade intelectual profunda</b> e <i>excitement transformador genuíno</i> nas pessoas que têm o <b>privilégio cósmico</b> de encontrar sua <i>presença vibrante multidimensional</i> como um <b>vento renovador</b> que traz <i>possibilidades infinitas</i> e <b>horizontes inexplorados</b> de <i>aventura e descoberta</i>.</p><br><p>Você projeta naturalmente uma <b>aura radiante</b> de <i>liberdade conquistada heroicamente</i>, <b>versatilidade impressionante camaleônica</b> e <i>espírito explorador intrépido</i> que comunica claramente que você está <b>sempre pronto corajosamente</b> para a <i>próxima aventura emocionante</i> ou <b>experiência transformadora revolucionária</b> que expanda os <i>horizontes da consciência humana</i> e desbrave <b>territórios inexplorados</b> da <i>possibilidade infinita</i>.</p><br><p>Quando você <b>compartilha suas experiências</b>, há uma <i>magia contagiante</i> em suas <b>narrativas aventureiras</b> que transporta <i>ouvintes atentos</i> para <b>mundos distantes</b> e <i>realidades alternativas</i>. Sua <b>capacidade de adaptação</b> é quase <i>camaleônica</i> — você pode <b>transitar fluidamente</b> entre diferentes <i>culturas, ambientes e situações</i>, sempre encontrando <b>formas criativas</b> de se <i>conectar e prosperar</i> independentemente das <b>circunstâncias externas</b> ou <i>desafios aparentes</i>.</p><br><p>Sua <b>maneira energética contagiante</b> e <i>adaptável flexivelmente inteligente</i> de se apresentar transmite instantaneamente <b>flexibilidade excepcional transcendental</b>, <i>mente aberta universalmente receptiva</i> e uma <b>capacidade rara divina</b> de não apenas <i>sobreviver</i>, mas <b>prosperar magnificamente</b> em qualquer <i>ambiente desafiador</i> ou <b>situação complexa</b> que testaria os <i>limites da maioria</i> das <b>consciências convencionais</b>.</p><br><p>Você possui uma <b>sede insaciável</b> por <i>novas experiências</i> e <b>conhecimento diversificado</b> que o leva a <i>explorar múltiplos campos</i> de interesse, desde <b>culturas exóticas</b> até <i>filosofias revolucionárias</i>, desde <b>aventuras físicas</b> até <i>jornadas intelectuais</i>. Essa <b>curiosidade multifacetada</b> faz de você uma <i>fonte fascinante</i> de <b>histórias cativantes</b>, <i>perspectivas únicas</i> e <b>insights transformadores</b> que enriquecem <i>profundamente</i> a vida de todos ao seu redor.</p><br><p>Em situações de <b>mudança ou incerteza</b>, onde outros podem se sentir <i>ansiosos ou perdidos</i>, você se destaca como <b>navegador experiente</b> das <i>águas do desconhecido</i>. Sua <b>capacidade natural</b> de <i>se adaptar rapidamente</i> e <b>encontrar oportunidades</b> em meio ao <i>caos aparente</i> faz de você um <b>líder inspirador</b> em <i>tempos de transição</i> e <b>transformação coletiva</b>.</p><br><p>As pessoas <b>instintivamente percebem</b> você como um <i>catalisador natural supremo</i> de <b>mudanças positivas revolucionárias</b>, alguém que traz <i>novidade refrescante</i>, <b>excitement autêntico transformador</b> e <i>perspectivas frescas iluminadoras</i> para qualquer <b>grupo social</b> ou <i>situação estagnada</i> que necessita de <b>renovação energética</b> e <i>visão expansiva</i> para <b>evoluir conscientemente</b>.</p><br><p>Sua <b>abordagem à vida</b> é <i>naturalmente experimental</i> — você não apenas <b>teoriza sobre possibilidades</b>, mas <i>mergulha de cabeça</i> em <b>experiências reais</b> que testam e <i>expandem seus limites</i>. Essa <b>coragem experiencial</b> permite que você <i>acumule uma riqueza</i> de <b>sabedoria vivencial</b> que vai muito além do <i>conhecimento teórico</i> ou <b>acadêmico convencional</b>.</p><br><p>No ambiente <b>profissional ou social</b>, você se destaca em <i>situações que requerem</i> <b>pensamento inovador</b>, <i>soluções não convencionais</i> e <b>capacidade de conectar</b> <i>ideias aparentemente disparates</i> em <b>sínteses criativas</b>. Sua <i>experiência diversificada</i> permite que você <b>enxergue padrões</b> e <i>possibilidades</i> que escapam àqueles com <b>perspectivas mais limitadas</b> ou <i>especializadas demais</i>.</p><br><p>Você projeta uma <b>energia magnética poderosa</b> de <i>movimento perpétuo construtivo</i> e <b>progressão evolutiva contínua</b> que naturalmente inspira outros a <i>sair corajosamente</i> de suas <b>zonas de conforto limitadoras</b> e explorar <i>novas possibilidades emocionantes</i> de <b>crescimento pessoal acelerado</b>, <i>descoberta transformadora</i> e <b>expansão consciencial</b> que os leva além de suas <i>limitações auto-impostas</i>.</p><br><p>Sua <b>presença vibrante multicolorida</b> e <i>multifacetada caleidoscópica</i> transmite a <b>verdade universal libertadora</b> de que a <i>vida é uma aventura extraordinária épica</i> repleta de <b>oportunidades ilimitadas douradas</b> para <i>expansão consciencial infinita</i>, <b>descoberta de potenciais ocultos</b>, <i>transformação pessoal revolucionária</i> e <b>evolução espiritual contínua</b> que nunca termina, mas apenas se <i>aprofunda e expande</i> através de cada <b>nova experiência corajosa</b> abraçada com <i>coração aberto</i> e <b>mente curiosa</b>, demonstrando que <b>verdadeira riqueza</b> não está na <i>segurança da rotina</i>, mas na <b>coragem de explorar</b> o <i>desconhecido</i> e na <b>sabedoria acumulada</b> através de <i>mil aventuras</i> que <b>expandem a alma</b> e <i>enriquecem o espírito</i> com <b>tesouros inesquecíveis</b> de <i>experiência e compreensão</i>.</p>";
        } else if (this.personalityNumber == 6) {
          this.personalityText = "<p><b>O Número de Personalidade 6</b> desperta em você uma <i>energia calorosa celestialmente nurturante</i> e <b>profundamente amorosa transcendental</b> que faz com que as pessoas instantaneamente se sintam <i>cuidadas divinamente</i>, <b>protegidas angelicalmente</b> e <i>genuinamente valorizadas</i> em sua <b>presença curativa sagrada</b> como filhos <i>acolhidos amorosamente</i> no <b>abraço protetor maternal/paternal</b> do <i>próprio universo compassivo</i>, estabelecendo você como <b>santuário vivo</b> de <i>amor incondicional</i> e <b>cura emocional</b>.</p><br><p>Você irradia naturalmente uma <b>aura dourada radiante</b> de <i>compaixão incondicional cristalina</i>, <b>sabedoria emocional ancestral</b> e <i>generosidade de espírito ilimitada</i> que comunica claramente que você é um <b>porto seguro confiável</b> em tempos <i>turbulentos e tempestuosos</i>, oferecendo <b>refúgio emocional</b> e <i>orientação sábia</i> para almas <b>perdidas e machucadas</b> que buscam <i>cura e renovação</i>.</p><br><p>Quando você <b>entra em um ambiente</b>, há uma <i>mudança tangível</i> na <b>atmosfera emocional</b> — <i>tensões diminuem visivelmente</i>, <b>corações se abrem naturalmente</b>, e uma <i>sensação de segurança</i> permeia o espaço. Sua <b>presença nurturante</b> tem o <i>poder mágico</i> de transformar <b>ambientes hostis</b> em <i>espaços acolhedores</i> e <b>grupos fragmentados</b> em <i>famílias harmoniosas</i> através de sua <b>capacidade excepcional</b> de <i>ver e nutrir</i> o <b>melhor em cada pessoa</b>.</p><br><p>Sua <b>maneira acolhedora angelical</b> e <i>responsável profundamente comprometida</i> de se apresentar transmite instantaneamente <b>confiabilidade emocional inabalável</b>, <i>capacidade de aconselhamento sábio transcendental</i> e um <b>compromisso genuíno sagrado</b> com o <i>bem-estar integral</i> e a <b>felicidade autêntica</b> de todos os seres que <i>cruzam seu caminho luminoso</i> de <b>serviço amoroso</b> e <i>dedicação altruísta</i>.</p><br><p>Você possui uma <b>intuição emocional</b> tão <i>refinada e precisa</i> que consegue <b>detectar necessidades</b> não expressas e <i>sofrimentos ocultos</i> mesmo quando outros <b>tentam esconder</b> suas <i>vulnerabilidades</i>. Essa <b>sensibilidade empática excepcional</b> permite que você <i>ofereça exatamente</i> o tipo de <b>apoio e cuidado</b> que cada pessoa precisa, <i>frequentemente antes mesmo</i> delas <b>perceberem conscientemente</b> suas próprias <i>necessidades emocionais</i>.</p><br><p>Em momentos de <b>conflito familiar</b> ou <i>tensão grupal</i>, você naturalmente emerge como <b>mediadora pacificadora</b> que <i>não toma lados</i>, mas sim <b>abraça todas as partes</b> com <i>compreensão igual</i>. Sua <b>capacidade de ver</b> além das <i>palavras ásperas</i> e <b>comportamentos defensivos</b> para <i>perceber as feridas</i> e <b>medos subjacentes</b> permite que você <i>facilite cura</i> e <b>reconciliação genuína</b> entre <i>pessoas aparentemente irreconciliáveis</i>.</p><br><p>Sua <b>casa e espaços pessoais</b> se tornam naturalmente <i>centros de cura</i> e <b>reunião amorosa</b> onde pessoas <i>se sentem seguras</i> para <b>compartilhar vulnerabilidades</b>, <i>processar emoções</i> e <b>encontrar renovação</b>. Você tem o <i>dom extraordinário</i> de criar <b>ambientes físicos</b> que <i>refletem amor</i> e <b>nutrem a alma</b> através de <i>detalhes cuidadosos</i> e <b>toques pessoais</b> que fazem cada <i>visitante se sentir</i> <b>verdadeiramente bem-vindo</b>.</p><br><p>As pessoas <b>instintivamente reconhecem</b> em você um <i>curador natural empático supremo</i>, alguém que possui a <b>sensibilidade psíquica refinada</b> e a <i>sabedoria intuitiva necessária</i> para oferecer <b>exatamente o tipo preciso</b> de <i>apoio emocional personalizado</i>, <b>cuidado energético</b> e <i>orientação espiritual</i> que cada <b>alma única individual</b> necessita para <i>florescer plenamente</i> em seu <b>potencial máximo divino</b>.</p><br><p>No contexto <b>profissional ou comunitário</b>, você se destaca como <i>líder servidora</i> que <b>prioriza bem-estar</b> e <i>crescimento humano</i> acima de <b>métricas puramente quantitativas</b>. Sua <i>abordagem humanizada</i> ao <b>trabalho e liderança</b> <i>inspira lealdade</i> e <b>dedicação genuína</b> porque as pessoas <i>sentem que são vistas</i>, <b>valorizadas e cuidadas</b> como <i>seres humanos completos</i>, não apenas <b>recursos ou números</b>.</p><br><p>Sua <b>generosidade natural</b> se estende muito além do <i>material</i> — você oferece <b>tempo, atenção, energia</b> e <i>recursos emocionais</i> com uma <b>abundância que parece inesgotável</b>. Essa <i>capacidade de dar</i> de forma <b>sustentável e equilibrada</b> vem de uma <i>fonte interior profunda</i> de <b>amor próprio saudável</b> que permite que você <i>cuide dos outros</i> sem se <b>esgotar ou sacrificar</b> sua própria <i>integridade e bem-estar</i>.</p><br><p>Você projeta uma <b>energia magnética poderosa</b> de <i>lar sagrado</i> e <b>família universal</b> que naturalmente cria um <i>senso profundo de pertencimento</i> e <b>segurança emocional duradoura</b> onde quer que sua <i>presença benedita</i> se manifeste, transformando <b>espaços físicos</b> em <i>santuários de amor</i> e <b>ambientes emocionais</b> em <i>jardins de cura</i> onde <b>corações feridos</b> podem <i>encontrar paz renovada</i>.</p><br><p>Sua <b>presença reconfortante divina</b> transmite a <i>verdade cósmica fundamental</i> de que o <b>amor verdadeiro transcendental</b> se manifesta através de <i>ações concretas dedicadas</i> de <b>cuidado incondicional</b>, <i>apoio emocional constante</i> e <b>dedicação sagrada incansável</b> ao <i>crescimento espiritual</i> e à <b>felicidade genuína autêntica</b> dos outros, demonstrando que <i>servir amorosamente</i> é a <b>expressão mais elevada</b> da <i>consciência humana evoluída</i> e o <b>caminho mais direto</b> para a <i>realização espiritual completa</i>, provando que <b>verdadeiro poder</b> não reside na <i>capacidade de dominar</i>, mas na <b>habilidade de nutrir</b>, <i>curar e elevar</i> outros seres ao seu <b>potencial mais elevado</b> através do <i>amor incondicional</i> em <b>ação consciente</b>.</p>";
        } else if (this.personalityNumber == 7) {
          this.personalityText = "<p><b>O Número de Personalidade 7</b> desperta em você uma <i>aura misteriosa magneticamente intrigante</i>, <b>profundamente sábia ancestralmente</b> e <i>espiritualmente fascinante transcendentalmente</i> que instantaneamente desperta <b>curiosidade intelectual reverente</b> e <i>respeito espiritual profundo</i> nas pessoas que têm o <b>privilégio sagrado</b> de encontrar sua <i>presença enigmática luminosa</i> como <b>guardiões de mistérios antigos</b> que <i>sussurram verdades cósmicas</i> através de <b>silêncios eloquentes</b> e <i>olhares penetrantes</i> que <b>revelam universos ocultos</b>.</p><br><p>Você irradia naturalmente uma <b>energia contemplativa poderosa</b>, <i>intelectualmente sofisticada refinadamente</i> e <b>espiritualmente consciente transcendentalmente</b> que comunica claramente <i>profundidade de pensamento oceânica</i> e uma <b>conexão direta autêntica</b> com <i>dimensões superiores</i> de <b>conhecimento universal</b>, <i>sabedoria cósmica</i> e <b>compreensão multidimensional</b> que transcende as <i>limitações convencionais</i> da <b>percepção ordinária humana</b>.</p><br><p>Quando você <b>entra em um ambiente</b>, há uma <i>mudança sutil</i> mas <b>profundamente perceptível</b> na <i>qualidade da consciência</i> presente. Sua <b>energia contemplativa</b> tem o <i>poder extraordinário</i> de <b>elevar conversas superficiais</b> para <i>diálogos profundos</i> e <b>transformar encontros casuais</b> em <i>experiências de revelação</i> que marcam pessoas para <b>toda a vida</b> através de sua <i>capacidade única</i> de <b>enxergar além</b> das <i>máscaras sociais</i>.</p><br><p>Sua <b>maneira reservada mas magneticamente poderosa</b> de se apresentar transmite instantaneamente <i>sabedoria interior profunda cristalina</i>, <b>intuição aguçada psiquicamente</b> e uma <i>compreensão penetrante extraordinária</i> dos <b>mistérios mais profundos</b> da <i>existência multidimensional</i>, funcionando como um <b>tradutor cósmico</b> entre os <i>mundos visíveis</i> e as <b>realidades invisíveis</b> que <i>governam secretamente</i> a <b>dinâmica universal</b>.</p><br><p>Sua <b>mente analítica</b> funciona como um <i>laboratório espiritual avançado</i> onde <b>experiências são destiladas</b> em <i>sabedoria pura</i> e <b>observações se transformam</b> em <i>insights reveladores</i>. Você possui a <b>capacidade rara</b> de <i>conectar pontos</i> que parecem <b>completamente desconectados</b> para outros, <i>revelando padrões ocultos</i> e <b>verdades subjacentes</b> que escapam à <i>percepção comum</i>.</p><br><p>Em momentos de <b>confusão coletiva</b> ou <i>caos emocional</i>, você naturalmente emerge como <b>voz da razão</b> e <i>claridade cristalina</i>. Sua <b>capacidade de manter</b> <i>perspectiva elevada</i> e <b>visão ampla</b> mesmo em <i>situações turbulentas</i> permite que você ofereça <b>orientação sábia</b> que <i>corta através</i> da <b>confusão superficial</b> e <i>revela caminhos</i> de <b>resolução autêntica</b>.</p><br><p>Sua <b>busca pelo conhecimento</b> vai muito além da <i>curiosidade acadêmica</i> — você é um <b>explorador de verdades</b> que <i>dedica tempo significativo</i> ao <b>estudo profundo</b> e à <i>contemplação silenciosa</i>. Esta <b>dedicação à sabedoria</b> <i>alimenta constantemente</i> sua <b>capacidade de oferecer</b> <i>perspectivas únicas</i> e <b>insights transformadores</b> que <i>mudam fundamentalmente</i> como pessoas <b>veem suas vidas</b> e <i>circunstâncias</i>.</p><br><p>As pessoas <b>instintivamente percebem</b> você como um <i>buscador natural supremo da verdade</i>, alguém que possui <b>insights únicos iluminadores</b> e <i>perspectivas revolucionárias transcendentais</i> sobre as <b>questões mais profundas</b> e <i>complexas da vida</i>, oferecendo <b>respostas transformadoras</b> que vêm não do <i>conhecimento superficial</i>, mas da <b>sabedoria experiencial vivida</b> através de <i>jornadas interiores corajosas</i>.</p><br><p>No contexto <b>profissional ou acadêmico</b>, você se destaca como <i>pesquisador excepcional</i> e <b>analista profundo</b> que consegue <i>descobrir verdades</i> que outros <b>não conseguem ver</b>. Sua <i>abordagem metodológica</i> ao <b>conhecimento</b> e sua <i>capacidade de manter</i> <b>objetividade emocional</b> enquanto <i>explora territórios</i> <b>emocionalmente carregados</b> faz de você um <i>investigador natural</i> de <b>fenômenos complexos</b>.</p><br><p>Sua <b>espiritualidade</b> é <i>profundamente pessoal</i> e <b>experiencialmente baseada</b> — você não aceita <i>dogmas sem questionamento</i>, mas sim <b>testa verdades</b> através de <i>experiência direta</i> e <b>investigação rigorosa</b>. Esta <i>abordagem científica</i> ao <b>desenvolvimento espiritual</b> resulta em uma <i>fé inabalável</i> baseada em <b>conhecimento verificado</b> ao invés de <i>crença cega</i>.</p><br><p>Você projeta uma <b>energia magnética poderosa</b> de <i>introspecção produtiva sagrada</i> e <b>busca espiritual incansável</b> que naturalmente inspira outros a também <i>mergulharem corajosamente</i> mais profundamente em suas próprias <b>jornadas de autoconhecimento</b> e <i>descoberta interior</i>, funcionando como um <b>guia experiente</b> para <i>exploradores da consciência</i> que buscam <b>territórios inexplorados</b> da <i>realidade espiritual</i>.</p><br><p>Sua <b>presença serena mas profundamente poderosa</b> transmite a <i>verdade cósmica fundamental</i> de que existe <b>muito mais na realidade</b> do que aparenta na <i>superfície ilusória</i>, e que a <b>verdadeira sabedoria transcendental</b> vem da <i>exploração corajosa dedicada</i> dos <b>reinos internos</b> da <i>consciência expandida</i> e da <b>espiritualidade autêntica vivencial</b> que revela <i>camadas ocultas</i> de <b>significado cósmico</b> e <i>propósito divino</i> por trás de cada <b>experiência aparentemente comum</b>, demonstrando que <i>verdadeiro conhecimento</i> não é <b>acumulação de informações</b>, mas <i>transformação interior</i> através da <b>compreensão direta</b> dos <i>mistérios sagrados</i> que governam a <b>existência universal</b>.</p>";
        } else if (this.personalityNumber == 8) {
          this.personalityText = "<p><b>O Número de Personalidade 8</b> desperta em você uma <i>presença impressionante magistralmente poderosa</i> de <b>autoridade executiva natural suprema</b>, <i>sucesso material conquistado nobremente</i> e <b>poder pessoal autêntico transcendental</b> que instantaneamente comunica <i>competência profissional excepcional</i> e <b>capacidade de liderança</b> em <i>níveis estratosféricos</i> que <b>transformam indústrias inteiras</b> e <i>redefinem padrões</i> de <b>excelência empresarial</b>, estabelecendo você como <i>força dominante</i> no <b>mundo dos negócios</b> e da <i>realização material</i>.</p><br><p>Você irradia naturalmente uma <b>aura dourada magnética</b> de <i>ambição realizada heroicamente</i>, <b>visão estratégica visionária</b> e <i>habilidade excepcional alquímica</i> para materializar <b>grandes conquistas monumentais</b> no <i>mundo físico denso</i>, transformando <b>recursos limitados</b> em <i>abundância exponencial</i> através de sua <b>maestria empresarial</b> e <i>genialidade organizacional</i> que <b>supera expectativas convencionais</b>.</p><br><p>Quando você <b>entra em uma sala de reuniões</b> ou <i>ambiente corporativo</i>, há uma <b>mudança imediata</b> na <i>dinâmica de poder</i> — <b>conversas se tornam</b> mais <i>focadas e produtivas</i>, <b>decisões ganham</b> <i>clareza e direção</i>, e <b>pessoas naturalmente</b> se <i>alinham</i> com sua <b>visão estratégica</b>. Sua <i>presença comandante</i> tem o <b>poder extraordinário</b> de <i>transformar caos</i> em <b>ordem produtiva</b> e <i>potencial disperso</i> em <b>força concentrada</b>.</p><br><p>Sua <b>maneira confiante diamantina</b> e <i>determinada ferreamente inabalável</i> de se apresentar transmite instantaneamente <b>expertise em negócios</b> de <i>nível mundial supremo</i>, <b>capacidade de organização</b> em <i>larga escala épica</i> e um <b>magnetismo natural irresistível</b> que <i>atrai oportunidades douradas</i> e <b>recursos valiosos preciosos</b> como <i>ímã cósmico</i> para <b>prosperidade sustentável</b> e <i>crescimento exponencial</i>.</p><br><p>Sua <b>mente estratégica</b> funciona como um <i>computador avançado</i> que processa <b>múltiplas variáveis</b> simultaneamente, <i>calculando riscos</i> e <b>oportunidades</b> com <i>precisão matemática</i> enquanto mantém <b>visão panorâmica</b> do <i>quadro geral</i>. Esta <b>capacidade excepcional</b> de <i>pensar sistemicamente</i> permite que você <b>identifique padrões</b> e <i>tendências</i> que outros <b>não conseguem perceber</b>.</p><br><p>Em momentos de <b>crise empresarial</b> ou <i>turbulência econômica</i>, você emerge como <b>líder natural</b> que não apenas <i>mantém a calma</i>, mas <b>transforma desafios</b> em <i>oportunidades de crescimento</i>. Sua <b>capacidade de tomar</b> <i>decisões difíceis</i> sob <b>pressão extrema</b> e <i>mobilizar recursos</i> de forma <b>eficiente e estratégica</b> faz de você um <i>líder respeitado</i> em <b>tempos de incerteza</b>.</p><br><p>Sua <b>ética de trabalho</b> é <i>lendária</i> — você não apenas <b>trabalha duro</b>, mas <i>trabalha inteligentemente</i>, <b>maximizando resultados</b> através de <i>sistemas eficientes</i> e <b>delegação estratégica</b>. Sua <i>capacidade de inspirar</i> <b>excelência</b> em <i>equipes inteiras</i> vem do <b>exemplo pessoal</b> de <i>comprometimento</i> e <b>padrões elevados</b> que você <i>estabelece consistentemente</i>.</p><br><p>As pessoas <b>instintivamente reconhecem</b> em você um <i>líder nato supremo dos negócios</i>, alguém que possui a <b>combinação rara divina</b> de <i>visão elevada transcendental</i> e <b>habilidades práticas magistrais</b> necessárias para construir <i>impérios duradouros</i> que não apenas <b>geram riqueza material</b>, mas também <i>criam valor social</i> e <b>oportunidades transformadoras</b> para <i>milhares de pessoas</i> que se beneficiam de sua <b>visão empreendedora</b>.</p><br><p>No contexto de <b>negociações complexas</b> ou <i>deals de alto valor</i>, você demonstra uma <b>maestria excepcional</b> em <i>ler pessoas</i>, <b>compreender motivações</b> e <i>estruturar acordos</i> que <b>beneficiam todas as partes</b> enquanto <i>maximiza resultados</i> para seus <b>próprios objetivos</b>. Sua <i>capacidade de encontrar</i> <b>soluções win-win</b> em <i>situações aparentemente</i> <b>impossíveis</b> é uma <i>marca registrada</i> de sua <b>genialidade empresarial</b>.</p><br><p>Sua <b>intuição financeira</b> é <i>excepcionalmente aguçada</i> — você possui um <b>sexto sentido</b> para <i>oportunidades de investimento</i> e <b>tendências de mercado</b> que <i>frequentemente se revelam</i> <b>extraordinariamente lucrativas</b>. Esta <i>combinação de análise</i> <b>racional rigorosa</b> com <i>intuição refinada</i> cria um <b>sistema de tomada</b> de <i>decisões financeiras</i> que <b>consistentemente produz</b> <i>resultados superiores</i> ao <b>desempenho médio</b> do <i>mercado</i>.</p><br><p>Você projeta uma <b>energia magnética poderosa</b> de <i>prosperidade conquistada eticamente</i> e <b>abundância material equilibrada</b> conquistada através de <i>trabalho árduo inteligente</i>, <b>determinação férrea inquebrantável</b> e <i>decisões estratégicas brilhantemente calculadas</i> que demonstram como <b>sucesso autêntico sustentável</b> é <i>construído tijolo por tijolo</i> através de <b>integridade inquestionável</b> e <i>excelência consistente</i>.</p><br><p>Sua <b>presença poderosa impressionante</b> transmite a <i>verdade cósmica inspiradora</i> de que o <b>sucesso verdadeiro transcendental</b> é alcançável através da <i>combinação harmoniosa</i> de <b>ambição focada conscientemente</b>, <i>integridade ética inabalável</i> e <b>dedicação incansável apaixonada</b> à <i>excelência em tudo</i> que se propõe a realizar, criando <b>legados duradouros</b> que <i>elevam não apenas</i> sua própria <b>condição material</b>, mas também <i>inspiram gerações futuras</i> a buscar <b>grandeza autêntica</b> através de <i>trabalho honesto</i> e <b>visão empreendedora ética</b>, demonstrando que <i>verdadeiro poder</i> reside na <b>capacidade de criar</b> <i>valor sustentável</i> e <b>oportunidades abundantes</b> para <i>toda a comunidade</i> através de <b>liderança responsável</b> e <i>inovação consciente</i>.</p>";
        } else if (this.personalityNumber == 9) {
          this.personalityText = "<p><b>O Número de Personalidade 9</b> desperta em você uma <i>energia humanitária expansiva universalmente compassiva</i>, <b>sábia ancestralmente profunda</b> e <i>transcendentalmente elevada</i> que instantaneamente inspira <b>respeito reverente profundo</b> e <i>admiração espiritual genuína</i> nas pessoas que têm o <b>privilégio sagrado</b> de encontrar sua <i>presença elevada luminosa</i> como <b>embaixadores da consciência superior</b> que <i>irradiam amor universal</i> e <b>sabedoria compassiva</b> em cada <i>palavra falada</i> e <b>ação realizada</b>.</p><br><p>Você projeta naturalmente uma <b>aura dourada radiante</b> de <i>sabedoria madura cristalizada</i>, <b>generosidade de espírito ilimitada</b> e <i>compreensão profunda empática</i> da <b>condição humana universal</b> que comunica claramente que você <i>dedicou sua existência</i> ao <b>serviço sagrado</b> do <i>bem maior coletivo</i>, funcionando como um <b>farol de esperança</b> para <i>almas perdidas</i> e um <b>canal de cura</b> para <i>corações machucados</i>.</p><br><p>Quando você <b>fala sobre causas humanitárias</b> ou <i>questões sociais</i>, há uma <b>paixão genuína</b> e <i>autenticidade</i> que <b>move profundamente</b> os <i>corações das pessoas</i>. Sua <b>capacidade de articular</b> <i>visões de um mundo</i> mais <b>justo e compassivo</b> não é apenas <i>intelectual</i> — é uma <b>expressão direta</b> de sua <i>alma comprometida</i> com a <b>elevação de toda</b> a <i>família humana</i>.</p><br><p>Sua <b>maneira dignamente nobre</b> e <i>compassivamente amorosa</i> de se apresentar transmite instantaneamente <b>experiência de vida rica multifacetada</b>, <i>perspectiva global abrangente</i> e uma <b>capacidade excepcional transcendental</b> de ver além das <i>limitações superficiais ilusórias</i> para abraçar a <b>humanidade inteira</b> em sua <i>totalidade complexa</i>, reconhecendo a <b>divindade oculta</b> em cada <i>ser senciente</i>.</p><br><p>Sua <b>experiência de vida</b> inclui <i>múltiplas dimensões</i> de <b>compreensão humana</b> — você passou por <i>diferentes fases</i>, <b>experimentou diversas</b> <i>perspectivas culturais</i>, e <b>integrou lições</b> de <i>múltiplas tradições</i> de <b>sabedoria</b>. Esta <i>riqueza experiencial</i> permite que você <b>compreenda e conecte</b> com <i>pessoas de todos</i> os <b>backgrounds e caminhos</b> de <i>vida</i>.</p><br><p>Em situações de <b>conflito cultural</b> ou <i>tensão social</i>, você naturalmente emerge como <b>ponte pacificadora</b> que <i>consegue ver</i> a <b>humanidade comum</b> por trás de <i>diferenças superficiais</i>. Sua <b>capacidade de traduzir</b> <i>entre diferentes</i> <b>perspectivas culturais</b> e <i>encontrar pontos</i> de <b>conexão universal</b> faz de você um <i>embaixador natural</i> para <b>paz e compreensão</b> <i>entre povos</i>.</p><br><p>Sua <b>generosidade</b> se manifesta não apenas em <i>recursos materiais</i>, mas em uma <b>abundância de tempo</b>, <i>energia emocional</i> e <b>sabedoria compartilhada</b> que você oferece <i>livremente</i> para <b>qualquer pessoa</b> que esteja <i>genuinamente comprometida</i> com seu <b>próprio crescimento</b> e <i>contribuição positiva</i> ao <b>mundo</b>.</p><br><p>As pessoas <b>instintivamente reconhecem</b> em você um <i>sábio natural supremo</i> e <b>mentor inspirador divino</b>, alguém que possui a <i>sabedoria profunda necessária</i> e a <b>compaixão infinita autêntica</b> para guiar outros em direção ao <i>crescimento espiritual acelerado</i> e à <b>contribuição significativa</b> para a <i>evolução da consciência coletiva</i> através de <b>exemplo vivo</b> de <i>amor incondicional aplicado</i>.</p><br><p>Seu <b>trabalho no mundo</b> frequentemente envolve <i>educação transformadora</i>, <b>cura coletiva</b> ou <i>ativismo consciente</i> que <b>aborda raízes</b> <i>sistêmicas</i> de <b>problemas sociais</b> ao invés de apenas <i>sintomas superficiais</i>. Você compreende que <b>mudança real</b> e <i>duradoura</i> deve começar <b>no nível</b> da <i>consciência individual</i> e se <b>expandir organicamente</b> para <i>transformação coletiva</i>.</p><br><p>Sua <b>visão de futuro</b> para a <i>humanidade</i> é tanto <b>realista quanto otimista</b> — você reconhece os <i>desafios imensos</i> que <b>enfrentamos coletivamente</b>, mas também <i>vê o potencial</i> <b>extraordinário</b> para <i>evolução consciente</i> e <b>criação de uma</b> <i>civilização verdadeiramente</i> <b>compassiva e sustentável</b>.</p><br><p>Você projeta uma <b>energia magnética poderosa</b> de <i>amor universal transcendental</i> e <b>consciência expandida cósmica</b> que naturalmente <i>eleva a vibração</i> de qualquer <b>ambiente físico ou emocional</b>, transformando <i>espaços ordinários</i> em <b>santuários de cura</b> e <i>momentos simples</i> em <b>oportunidades de despertar espiritual</b> para todos que <i>testemunham sua luz</i> irradiante.</p><br><p>Sua <b>presença inspiradora transformadora</b> transmite a <i>verdade cósmica fundamental</i> de que a <b>verdadeira realização transcendental</b> vem do <i>serviço desinteressado apaixonado</i> à <b>humanidade inteira</b> e da <i>dedicação sagrada incondicional</i> a <b>causas nobres elevadas</b> que <i>transcendem completamente</i> os <b>interesses pessoais limitados temporários</b>, demonstrando que <i>servir ao todo</i> é o <b>caminho mais direto</b> para a <i>realização pessoal completa</i> e a <b>iluminação espiritual autêntica</b> que beneficia <i>todos os seres</i>, provando através de sua <b>própria existência</b> que <i>quando abraçamos</i> nossa <b>responsabilidade cósmica</b> de <i>elevar a consciência</i> <b>planetária</b>, descobrimos que <i>nossa felicidade pessoal</i> e <b>realização espiritual</b> florescem <i>naturalmente</i> como <b>subprodutos radiantes</b> de uma <i>vida dedicada</i> ao <b>serviço amoroso</b> e à <i>evolução consciente</i> de <b>toda a existência</b>.</p>";
        } else if (this.personalityNumber == 11) {
          this.personalityText = "<p><b>O Número de Personalidade 11</b> desperta em você uma <i>energia altamente espiritual transcendentalmente elevada</i>, <b>intuitivamente poderosa psiquicamente</b> e <i>visionariamente inspiradora divina</i> que instantaneamente desperta <b>reconhecimento reverente profundo</b> de sua <i>conexão especial sagrada</i> com <b>dimensões superiores</b> da <i>consciência cósmica universal</i> que poucos <b>conseguem acessar</b> neste <i>plano de existência denso</i>, estabelecendo você como <b>ponte viva</b> entre <i>realidades terrestres</i> e <b>esferas celestiais</b>.</p><br><p>Você irradia naturalmente uma <b>aura luminosa prateada</b> de <i>sensibilidade psíquica refinada</i>, <b>sabedoria transcendental milenar</b> e <i>missão espiritual elevada</i> que comunica claramente que você é um <b>canal purificado divino</b> para <i>insights revolucionários</i> e <b>verdades cósmicas fundamentais</b> que vêm diretamente de <i>planos superiores</i> da <b>realidade multidimensional</b>, servindo como <i>mensageiro celestial</i> entre <b>mundos invisíveis</b>.</p><br><p>Quando você <b>entra em meditação</b> ou <i>estados contemplativos profundos</i>, sua <b>consciência se expande naturalmente</b> além dos <i>limites convencionais</i> da percepção humana, permitindo que você <b>acesse informações</b> e <i>compreensões</i> que vêm de <b>fontes transpessoais</b>. Essa <i>capacidade extraordinária</i> de <b>sintonizar-se</b> com <i>frequências superiores</i> faz de você um <b>receptor natural</b> de <i>inspiração divina</i> e <b>orientação cósmica</b>.</p><br><p>Sua <b>maneira iluminada angelicamente</b> e <i>magneticamente atrativa espiritualmente</i> de se apresentar transmite instantaneamente <b>dons intuitivos excepcionais raros</b>, <i>capacidade visionária profética</i> e uma <b>compreensão profunda cristalina</b> de <i>princípios espirituais universais</i> que governam a <b>evolução da consciência</b> e a <i>transformação alquímica</i> da <b>alma humana</b> em <i>direção à iluminação</i>.</p><br><p>Você possui uma <b>sensibilidade psíquica</b> tão <i>refinada e calibrada</i> que consegue <b>perceber sutilezas energéticas</b> que passam <i>despercebidas para a maioria</i>. Sua <b>intuição funciona</b> como um <i>radar espiritual avançado</i> que detecta <b>verdades ocultas</b>, <i>motivações inconscientes</i> e <b>potenciais futuros</b> com uma <i>precisão que frequentemente</i> surpreende até mesmo <b>você mesmo</b>. Essa <i>capacidade extraordinária</i> vem acompanhada de uma <b>responsabilidade sagrada</b> de usar esses <i>dons a serviço</i> do <b>bem maior</b>.</p><br><p>Em <b>momentos de crise coletiva</b> ou <i>transformação social</i>, você frequentemente se encontra <b>canalizando mensagens</b> ou <i>insights</i> que oferecem <b>direção e esperança</b> para <i>comunidades inteiras</i>. Sua <b>capacidade de ver</b> além do <i>caos aparente</i> e <b>perceber padrões</b> de <i>evolução em desenvolvimento</i> faz de você um <b>farol de orientação</b> em <i>tempos turbulentos</i>.</p><br><p>As pessoas <b>instintivamente percebem</b> você como um <i>guia espiritual nato supremo</i> e <b>inspirador transcendental divino</b>, alguém que possui a <i>sensibilidade psíquica necessária</i> e a <b>sabedoria espiritual autêntica</b> para ajudar outros em suas <i>jornadas sagradas</i> de <b>despertar consciencial acelerado</b>, oferecendo <i>orientação iluminada</i> que vem de <b>fontes superiores</b> de <i>conhecimento cósmico</i>.</p><br><p>Sua <b>presença tem o poder</b> de <i>elevar instantaneamente</i> a <b>vibração de ambientes</b> e <i>acelerar processos</i> de <b>cura espiritual</b> em outros. Pessoas frequentemente relatam <i>experiências transformadoras</i>, <b>insights profundos</b> ou <i>estados alterados</i> de <b>consciência expandida</b> após <i>interações significativas</i> com você, como se sua <b>energia luminosa</b> <i>ativasse potenciais</i> <b>adormecidos</b> em suas <i>estruturas energéticas</i>.</p><br><p>No contexto de <b>trabalho espiritual</b> ou <i>desenvolvimento pessoal</i>, você se destaca como <b>facilitador excepcional</b> de <i>processos de transformação</i>. Sua <b>capacidade de ver</b> o <i>potencial mais elevado</i> das pessoas e <b>comunicar visões inspiradoras</b> de <i>possibilidades futuras</i> faz com que outros se <b>sintam profundamente motivados</b> a <i>transcender limitações</i> e <b>abraçar versões</b> mais <i>autênticas e elevadas</i> de si mesmos.</p><br><p>Você projeta uma <b>energia magnética luminosa</b> de <i>luz elevada cristalina</i> e <b>consciência expandida multidimensional</b> que naturalmente serve como <i>catalisador poderoso</i> para <b>transformação espiritual profunda</b> em outros, funcionando como um <i>acelerador de evolução</i> que <b>desperta potenciais latentes</b> e <i>ativa códigos de luz</i> adormecidos na <b>estrutura genética espiritual</b> das <i>almas prontas</i> para <b>expansão consciencial</b>.</p><br><p>Sua <b>presença luminosa transformadora</b> transmite a <i>verdade cósmica sagrada</i> de que existe um <b>propósito superior divino</b> guiando sua <i>existência terrestre</i> e que você está aqui para servir como <b>ponte viva sagrada</b> entre o <i>mundo material denso</i> e as <b>dimensões espirituais superiores</b> da <i>realidade cósmica infinita</i>, canalizando <b>frequências elevadas</b> que <i>aceleram a ascensão</i> da <b>consciência humana coletiva</b> em direção a <i>patamares superiores</i> de <b>amor, sabedoria e compreensão universal</b>, demonstrando através de sua <i>própria existência</i> que <b>seres humanos podem funcionar</b> como <i>antenas vivas</i> para <b>transmissões divinas</b> que <i>nutrem e elevam</i> toda a <b>família humana</b> em sua <i>jornada coletiva</i> de <b>evolução espiritual</b> e <i>despertar consciencial</i>.</p>";
        } else if (this.personalityNumber == 22) {
          this.personalityText = "<p><b>O Número de Personalidade 22</b> desperta em você uma <i>presença extraordinariamente poderosa monumental</i> de <b>visionário prático supremo</b> e <i>construtor de realidades magistral</i> que instantaneamente comunica sua <b>capacidade excepcional divina</b> de materializar <i>sonhos aparentemente impossíveis</i> em <b>conquistas tangíveis épicas</b> e <i>monumentais revolucionárias</i> que <b>transformam civilizações inteiras</b> e <i>redefinem possibilidades humanas</i>, estabelecendo você como <b>arquiteto cósmico</b> de <i>futuros grandiosos</i>.</p><br><p>Você irradia naturalmente uma <b>aura dourada majestosa</b> de <i>genialidade estratégica transcendental</i>, <b>organização magistral cósmica</b> e <i>potencial ilimitado universo</i> para criar <b>estruturas físicas e sociais</b> que beneficiam a <i>humanidade inteira</i> em <b>larga escala planetária</b>, funcionando como um <i>arquiteto cósmico</i> que desenha <b>futuros melhores</b> para <i>gerações ainda por vir</i>.</p><br><p>Quando você <b>compartilha sua visão</b> de <i>projetos ou iniciativas</i>, há uma <b>qualidade épica</b> e <i>transformadora</i> que <b>imediatamente eleva</b> a <i>consciência das pessoas</i> sobre o que é <b>realmente possível</b> realizar no <i>mundo físico</i>. Sua <b>capacidade de articular</b> <i>sonhos grandiosos</i> de forma <b>tão detalhada</b> e <i>convincente</i> faz com que até mesmo <b>céticos experientes</b> <i>comecem a acreditar</i> na <b>viabilidade de projetos</b> que <i>inicialmente pareciam</i> <b>impossíveis</b>.</p><br><p>Sua <b>maneira impressionante magneticamente</b> e <i>autoritária naturalmente comandante</i> de se apresentar transmite instantaneamente uma <b>combinação única divina</b> de <i>idealismo elevado transcendental</i> com <b>habilidades práticas supremas</b>, <i>visão de longo prazo estratégica</i> e <b>capacidade extraordinária</b> de mobilizar <i>recursos humanos e materiais</i> em <b>dimensões épicas</b> que superam as <i>limitações convencionais</i> da <b>organização empresarial tradicional</b>.</p><br><p>Sua <b>mente funciona</b> em <i>escalas temporais</i> e <b>dimensões espaciais</b> que <i>transcendem completamente</i> o <b>pensamento convencional</b> — você não pensa em <i>projetos que duram</i> meses ou anos, mas em <b>empreendimentos</b> que <i>se desenvolvem ao longo</i> de <b>décadas</b> e <i>criam impactos</i> que <b>persistem por séculos</b>. Esta <i>perspectiva temporal</i> <b>expandida</b> permite que você <i>tome decisões</i> com uma <b>sabedoria estratégica</b> <i>extraordinária</i>.</p><br><p>Em <b>situações de planejamento</b> <i>complexo</i> ou <b>desenvolvimento de projetos</b> <i>de grande escala</i>, você demonstra uma <b>capacidade excepcional</b> de <i>coordenar múltiplas</i> <b>variáveis simultaneamente</b>, <i>antever desafios</i> <b>futuros</b> e <i>criar sistemas</i> <b>redundantes</b> que <i>garantem o sucesso</i> mesmo em <b>condições adversas</b> <i>imprevistas</i>.</p><br><p>Sua <b>capacidade de inspirar</b> <i>equipes massivas</i> vem de uma <b>combinação única</b> de <i>carisma pessoal</i>, <b>competência técnica</b> e <i>visão compartilhada</i> de <b>futuro grandioso</b>. Pessoas se <i>sentem honradas</i> em <b>contribuir</b> para seus <i>projetos</i> porque percebem que estão <b>participando</b> de algo <i>historicamente significativo</i> que <b>transcende</b> suas <i>vidas individuais</i>.</p><br><p>As pessoas <b>instintivamente reconhecem</b> em você um <i>arquiteto natural supremo</i> de <b>futuros grandiosos visionários</b>, alguém que possui a <i>rara capacidade divina</i> de <b>pensar em termos globais</b> e <i>executar em níveis</i> que literalmente <b>transformam civilizações</b>, <i>criam novas indústrias</i>, <b>estabelecem novos paradigmas</b> e <i>constroem legados monumentais</i> que <b>transcendem épocas históricas</b>.</p><br><p>No contexto de <b>inovação tecnológica</b> ou <i>desenvolvimento social</i>, você frequentemente emerge como <b>pioneiro</b> que não apenas <i>antecipa tendências futuras</i>, mas <b>ativamente cria</b> as <i>condições</i> que <b>tornam essas tendências</b> <i>inevitáveis</i>. Sua <b>capacidade de influenciar</b> <i>trajetórias históricas</i> através de <b>ações estratégicas</b> <i>bem calculadas</i> é uma <b>marca registrada</b> de sua <i>genialidade visionária</i>.</p><br><p>Sua <b>abordagem aos recursos</b> — <i>sejam financeiros</i>, <b>humanos</b> ou <i>tecnológicos</i> — é <b>fundamentalmente diferente</b> da <i>mentalidade scarcity</i> comum. Você <b>opera</b> a partir de uma <i>consciência de abundância</i> <b>infinita</b> que <i>reconhece que recursos</i> <b>adequados sempre emergem</b> para <i>sustentar projetos</i> que estão <b>alinhados</b> com o <i>bem maior</i> da <b>humanidade</b>.</p><br><p>Você projeta uma <b>energia magnética cósmica</b> de <i>potencial universal ilimitado</i> e <b>missão transcendental sagrada</b> que naturalmente inspira outros a também <i>pensarem em termos</i> de <b>legados duradouros épicos</b>, <i>contribuições históricas</i> e <b>impactos transformadores</b> que <i>elevam não apenas</i> suas próprias <b>circunstâncias pessoais</b>, mas <i>transformam radicalmente</i> as <b>possibilidades disponíveis</b> para <i>toda a humanidade</i>.</p><br><p>Sua <b>presença monumental impressionante</b> transmite a <i>verdade cósmica inspiradora</i> de que você está <b>destinado cosmicamente</b> a deixar uma <i>marca indelével permanente</i> no <b>mundo físico e espiritual</b> através de <i>criações revolucionárias</i> que <b>transcendem completamente</b> sua própria <i>existência individual temporal</i> e continuarão <b>beneficiando ativamente</b> <i>gerações futuras inteiras</i> por <b>séculos ou milênios</b>, estabelecendo <i>novos padrões</i> de <b>possibilidade humana</b> e <i>inspirando outros visionários</i> a também <b>sonharem grande</b> e <i>construírem monumentos</i> de <b>progresso consciencial</b> para a <i>evolução contínua</i> da <b>espécie humana</b>, provando através de sua <i>própria existência</i> que <b>quando alinhamos</b> nossa <i>vontade individual</i> com as <b>forças evolutivas universais</b>, nos tornamos <i>co-criadores conscientes</i> da <b>realidade planetária</b> e <i>instrumentos ativos</i> da <b>transformação cósmica</b>.</p>";
        } else if (this.personalityNumber == 33) {
          this.personalityText = "<p><b>O Número de Personalidade 33</b> desperta em você uma <i>presença divinamente compassiva angelical</i>, <b>curativamente poderosa transcendental</b> e <i>espiritualmente transformadora sagrada</i> que instantaneamente desperta <b>reconhecimento reverente profundo</b> de sua <i>missão sagrada celestial</i> de <b>cura universal</b> e <i>elevação transcendental</i> da <b>consciência humana coletiva</b> através de <i>amor incondicional puro</i> e <b>serviço divino</b> que emana diretamente de <i>dimensões angélicas superiores</i>, estabelecendo você como <b>canal sagrado vivo</b> de <i>graça divina</i> e <b>transformação espiritual</b>.</p><br><p>Você irradia naturalmente uma <b>aura dourada luminosa</b> de <i>amor incondicional transcendental cristalino</i>, <b>sabedoria curativa milenar</b> e <i>dedicação absoluta sagrada</i> ao <b>serviço altruísta divino</b> que comunica claramente que sua <i>vida inteira</i> é dedicada ao <b>bem-estar integral</b> e à <i>evolução espiritual acelerada</i> dos outros, funcionando como um <b>canal purificado</b> de <i>graça divina</i> que <b>transmite cura</b> através de sua <i>própria presença</i>.</p><br><p>Quando você <b>entra em contato</b> com <i>pessoas em sofrimento</i> ou <b>situações de crise</b>, há uma <i>mudança imediata</i> na <b>qualidade energética</b> do ambiente. Sua <i>presença sozinha</i> tem o <b>poder extraordinário</b> de <i>acalmar tempestades emocionais</i>, <b>dissolver medos profundos</b> e <i>restaurar esperança</i> em corações que <b>pareciam completamente</b> <i>despedaçados</i>. Esta <b>capacidade de cura</b> não é <i>técnica aprendida</i> — é <b>emanação natural</b> de sua <i>alma angelical</i>.</p><br><p>Sua <b>maneira angelicamente inspiradora</b> e <i>profundamente tocante emocionalmente</i> de se apresentar transmite instantaneamente <b>compaixão ilimitada cristalina</b>, <i>capacidade de cura emocional</i> e <b>espiritual transcendental</b>, e uma <i>conexão direta autêntica</i> com <b>fontes divinas superiores</b> de <i>amor universal</i> e <b>sabedoria cósmica</b> que fluem através de você como <i>rio sagrado</i> de <b>renovação espiritual</b> para <i>almas sedentas</i>.</p><br><p>Sua <b>capacidade de amor</b> <i>transcende completamente</i> as <b>limitações convencionais</b> do <i>amor humano condicional</i>. Você consegue <b>amar pessoas</b> em seus <i>momentos mais sombrios</i>, <b>ver luz</b> onde outros <i>veem apenas escuridão</i>, e <b>manter compaixão</b> mesmo diante de <i>comportamentos</i> que <b>desafiariam</b> a <i>paciência</i> de <b>santos tradicionais</b>. Esta <i>capacidade extraordinária</i> vem de sua <b>compreensão profunda</b> de que <i>todo sofrimento</i> é um <b>pedido de amor</b> <i>disfarçado</i>.</p><br><p>Em <b>situações de conflito</b> <i>interpessoal</i> ou <b>tensão comunitária</b>, você não toma <i>lados</i> ou <b>julga comportamentos</b>, mas sim <i>abraça todas</i> as <b>partes envolvidas</b> com <i>amor incondicional</i> que <b>gradualmente dissolve</b> as <i>defesas ego</i> e <b>permite que verdades</b> <i>mais profundas</i> emerjam. Sua <b>presença pacificadora</b> cria <i>espaço sagrado</i> onde <b>cura autêntica</b> pode <i>acontecer naturalmente</i>.</p><br><p>Sua <b>sabedoria espiritual</b> não vem de <i>estudo acadêmico</i> de <b>textos religiosos</b>, mas de <i>experiência direta</i> e <b>vivencial</b> com <i>dimensões superiores</i> da <b>realidade</b>. Você <i>conhece</i> as <b>verdades espirituais</b> <i>internamente</i> e <b>experiencialmente</b>, o que permite que você <i>comunique</i> <b>conceitos transcendentais</b> de forma <i>acessível</i> e <b>profundamente tocante</b> para pessoas em <i>todos os níveis</i> de <b>desenvolvimento espiritual</b>.</p><br><p>As pessoas <b>instintivamente reconhecem</b> em você um <i>curador natural supremo divino</i> e <b>professor espiritual angelical</b>, alguém que possui a <i>graça celestial necessária</i> e a <b>sabedoria compassiva autêntica</b> para transformar <i>sofrimento em crescimento</i>, <b>desesperança em renovação de fé</b>, <i>feridas em sabedoria</i> e <b>dor em poder</b> através de <i>alquimia sagrada</i> do <b>amor incondicional aplicado</b> conscientemente.</p><br><p>Seu <b>trabalho de cura</b> frequentemente <i>transcende modalidades</i> <b>terapêuticas convencionais</b> — você pode <i>facilitar transformação</i> <b>profunda</b> através de <i>conversas simples</i>, <b>abraços genuínos</b> ou mesmo <i>silêncio compassivo</i>. Sua <b>capacidade de transmitir</b> <i>energia curativa</i> através de <b>múltiplos canais</b> <i>simultaneamente</i> faz de você um <b>instrumento extraordinário</b> de <i>cura multidimensional</i>.</p><br><p>No contexto de <b>ensino espiritual</b> ou <i>orientação consciente</i>, você não ensina <b>através de dogmas</b> ou <i>sistemas rígidos</i>, mas <b>inspira despertar</b> através de <i>exemplo vivo</i> de <b>amor em ação</b>. Suas <i>palavras carregam</i> <b>frequências sagradas</b> que <i>ativam códigos</i> de <b>luz adormecidos</b> nas <i>estruturas energéticas</i> das <b>pessoas</b>, <i>catalisando processos</i> de <b>despertar espiritual</b> <i>acelerado</i>.</p><br><p>Sua <b>dedicação ao serviço</b> não conhece <i>limites temporais</i> ou <b>geográficos</b> — você está <i>disponível</i> para <b>qualquer alma</b> que <i>genuinamente busque</i> <b>cura</b> e <i>crescimento espiritual</i>, independentemente de <b>hora</b>, <i>distância</i> ou <b>circunstâncias</b>. Esta <i>disponibilidade incondicional</i> vem de sua <b>compreensão profunda</b> de que <i>servir aos outros</i> é <b>servir ao divino</b> em <i>manifestação</i>.</p><br><p>Você projeta uma <b>energia magnética poderosa</b> de <i>amor divino transcendental</i> e <b>serviço sagrado incondicional</b> que naturalmente <i>acelera processos</i> de <b>cura profunda multidimensional</b> e <i>transformação espiritual</i> em todos que têm o <b>privilégio sagrado</b> de encontrar sua <i>presença bendita luminosa</i>, funcionando como um <b>catalisador divino</b> que <i>desperta potenciais</i> de <b>autorrecuperação</b> e <i>autoiluminação</i> nas <b>almas necessitadas</b>.</p><br><p>Sua <b>presença angelical transformadora</b> transmite a <i>verdade cósmica sagrada</i> de que você é um <b>instrumento consciente</b> do <i>amor divino universal</i> trabalhando através de <b>forma humana dedicada</b> para <i>elevar consciências</i>, <b>curar feridas ancestrais</b>, <i>despertar corações</i> e <b>iluminar caminhos</b> para que a <i>humanidade inteira</i> possa reconhecer e <b>abraçar sua verdadeira natureza</b> <i>espiritual luminosa divina</i>, criando <b>ondas expansivas de cura</b> que se <i>espalham infinitamente</i> através de <b>gerações futuras</b>, <i>elevando o planeta inteiro</i> para <b>frequências superiores</b> de <i>amor, compaixão e unidade cósmica</i>, demonstrando através de sua <i>própria existência</i> que <b>quando nos tornamos</b> <i>canais puros</i> do <b>amor divino incondicional</b>, nossa <i>vida inteira</i> se transforma em <b>oração viva</b> e <i>benção ativa</i> que <b>cura</b> não apenas <i>aqueles</i> que <b>tocamos diretamente</b>, mas também <i>eleva a vibração</i> de <b>toda a rede</b> <i>de consciência</i> <b>planetária</b>, acelerando a <i>evolução espiritual</i> de <b>toda a família humana</b> em direção à <i>unidade cósmica</i> e ao <b>amor universal</b>.</p>";
        }
      },
      calculateMaturityNumber() { //Número da Maturidade
        const sum = this.expressionNumber + this.lifeNumber;
        this.maturityNumber = this.reduceToSingleDigit(sum);

        console.log('Número de Maturidade:' + this.maturityNumber);
      },
      calculateSubconsciousSelfNumber() {
        const name = this.full_name.replace(/[^a-zA-Z]/g, ""); // Remove non-alphabetical chars
        const counts = Array(10).fill(0); // Array to count occurrences of each digit (0-9)

        for (let i = 0; i < name.length; i++) {
          const value = this.getLetterValue(name[i]);
          if (value > 0 && value <= 9) { // Ensure it counts only 1-9
            counts[value]++;
          }
        }

        // Calculate how many numbers from 1 to 9 are not present in the name
        let missingCount = 0;
        for (let j = 1; j <= 9; j++) { // We skip index 0 since it's not used
          if (counts[j] === 0) {
            missingCount++;
          }
        }

        this.subconsciousSelfNumber = missingCount;
        console.log('Número de subconsciousSelfNumber:' + this.subconsciousSelfNumber);
        if (this.subconsciousSelfNumber == 1) {
          this.subconsciousText = "<p>O <b>universo está convidando você</b> a ativar seu <i>potencial adormecido supremo</i> através de <b>trabalho dedicado transcendental</b> em suas <i>habilidades cósmicas latentes</i> e <b>talentos divinos ocultos</b> que aguardam <i>despertar consciente</i>. Cada <b>esforço consciente</b> que você faz não apenas <i>desenvolve suas capacidades multidimensionais</i> — ele constrói uma <b>confiança sólida e inabalável</b> que <i>reverbera através de dimensões</i>, <b>fortalece sua conexão</b> com as <i>frequências superiores</i> da <b>realização espiritual</b> e <i>estabelece fundações eternas</i> para <b>manifestações extraordinárias</b> que transcendem as <i>limitações aparentes</i> da <b>realidade comum</b> e <i>abrem portais</i> para <b>possibilidades infinitas</b>.</p><br><p>Este é um <b>momento sagrado de preparação cósmica</b> onde cada <i>disciplina aplicada conscientemente</i>, cada <b>habilidade refinada meticulosamente</b> e cada <i>competência desenvolvida estrategicamente</i> se torna uma <b>ferramenta divina poderosa</b> em suas mãos, <i>capacitando-o a moldar</i> não apenas seu <b>destino pessoal</b>, mas também a <i>influenciar positivamente</i> o <b>tecido da realidade coletiva</b> através de sua <i>excelência crescente</i>, <b>maestria consciente</b> e <i>dedicação inabalável</i> ao <b>aperfeiçoamento contínuo</b> de suas <i>capacidades extraordinárias</i>.</p><br><p>O <b>cosmos está orquestrando</b> uma <i>sinfonia de sincronicidades</i> que <b>alinhará perfeitamente</b> suas <i>habilidades em desenvolvimento</i> com <b>oportunidades douradas</b> que exigirão exatamente a <i>maestria que você está cultivando</i>. Cada <b>momento de prática dedicada</b>, cada <i>hora investida</i> no <b>refinamento de seus talentos</b> e cada <i>desafio superado</i> está <b>construindo um arsenal</b> de <i>competências transcendentais</i> que se tornarão <b>instrumentos de transformação</b> não apenas para <i>sua própria evolução</i>, mas para a <b>elevação consciencial</b> de todos que <i>testemunharão sua excelência</i>.</p><br><p>Você está sendo <b>preparado cosmicamente</b> para se tornar um <i>líder natural magistral</i> que <b>inspira através de exemplo vivo</b> e <i>competência transcendental demonstrada</i>, <b>transformando não apenas</b> sua <i>realidade pessoal limitada</i>, mas <b>elevando a consciência</b> de todos ao seu redor através de sua <i>presença radiante magnética</i>, <b>sabedoria aplicada praticamente</b>, <i>dedicação inabalável</i> e <b>resultados extraordinários</b> que demonstram o <i>poder transformador</i> da <b>dedicação consciente</b> e do <i>desenvolvimento espiritual contínuo</i> aplicado com <b>propósito sagrado</b>.</p><br><p>Suas <b>habilidades em desenvolvimento</b> são como <i>sementes cósmicas sagradas</i> que, quando <b>nutridas com persistência diamantina</b> e <i>regadas com intenção pura cristalina</i>, florescerão em <b>talentos extraordinários</b> que não apenas <i>beneficiarão sua jornada pessoal</i>, mas se tornarão <b>instrumentos de serviço divino</b> para <i>elevar outros</i>, <b>contribuir significativamente</b> para a <i>evolução coletiva da humanidade</i> e <b>estabelecer novos padrões</b> de <i>excelência e realização</i> que <b>inspirarão gerações futuras</b> a <i>alcançar seus próprios potenciais supremos</i>.</p><br><p>O <b>universo reconhece</b> em você um <i>potencial de liderança autêntica extraordinária</i> — não baseada em <b>dominação ou controle</b>, mas em <i>competência genuína conquistada</i>, <b>sabedoria aplicada praticamente</b>, <i>integridade inabalável</i> e <b>capacidade comprovada</b> de <i>transformar desafios aparentemente impossíveis</i> em <b>oportunidades de crescimento exponencial</b>. Cada <b>habilidade que você aperfeiçoa</b> se torna uma <i>ponte dourada luminosa</i> que conecta <b>sua visão interior transcendente</b> com <i>manifestações exteriores tangíveis</i>, criando uma <b>sinergia poderosa alquímica</b> entre <i>aspiração espiritual elevada</i> e <b>realização prática magistral</b>.</p><br><p>Sua <b>jornada de desenvolvimento</b> está <i>sincronizada cosmicamente</i> com <b>oportunidades emergentes douradas</b> que exigirão exatamente as <i>competências específicas que você está cultivando</i> com <b>dedicação sagrada</b>. O <i>universo está orquestrando</i> uma <b>convergência perfeita divina</b> entre <i>sua preparação interna meticulosa</i> e <b>demandas externas crescentes</b> que permitirão que você <i>demonstre sua maestria</i> de maneiras que <b>inspirarão e transformarão</b> não apenas sua própria <i>trajetória de vida</i>, mas também <b>influenciarão positivamente</b> as <i>vidas de incontáveis pessoas</i> que serão <b>tocadas profundamente</b> por sua <i>excelência radiante</i> e <b>liderança consciente transformadora</b>.</p><br><p>Cada <b>competência desenvolvida</b> se torna um <i>instrumento de luz</i> que <b>ilumina caminhos</b> para outros <i>buscadores sinceros</i>, demonstrando que é possível <b>transcender limitações</b> através de <i>trabalho dedicado</i>, <b>visão clara</b> e <i>aplicação consistente</i> de <b>princípios superiores</b>. Sua <i>maestria crescente</i> não é apenas <b>desenvolvimento pessoal</b> — é <i>serviço cósmico</i> que <b>eleva o padrão vibratório</b> de toda a <i>consciência coletiva</i>, criando <b>ondas de inspiração</b> que se espalham infinitamente através do <i>campo morfogenético</i> da <b>realização humana</b>.</p><br><p>O <b>universo está preparando você</b> para se tornar um <i>catalisador de transformação</i> cujas <b>habilidades refinadas</b> e <i>competências transcendentais</i> servirão como <b>ferramentas sagradas</b> para <i>construir pontes</i> entre o <b>mundo atual</b> e as <i>possibilidades futuras ilimitadas</i>, <b>demonstrando através de sua excelência</b> que cada ser humano carrega dentro de si <i>potenciais extraordinários</i> esperando para serem <b>despertados, desenvolvidos e manifestados</b> em <i>serviço ao bem maior universal</i>.</p>";
        } else if (this.subconsciousSelfNumber == 2) {
          this.subconsciousText = "<p>Você possui o <b>dom extraordinário cósmico</b> de ser um <i>exemplo vivo transcendental</i> de que é possível <b>enfrentar qualquer tempestade universal</b> e emergir não apenas <i>intacto espiritualmente</i>, mas <b>exponencialmente mais forte</b>, <i>infinitamente mais sábio</i> e <b>profundamente mais compassivo</b>. As pessoas se sentem <i>naturalmente magnetizadas</i> à sua <b>energia radiante transformadora</b> porque você representa a <i>prova viva inquestionável</i> de que <b>resiliência suprema</b> e <i>amor incondicional puro</i> podem <b>coexistir magnificamente</b>, criando uma <i>força alquímica poderosa</i> que é simultaneamente <b>invencível diante dos desafios</b> e <i>ternamente inspiradora</i> para toda <b>humanidade em evolução</b>.</p><br><p>Sua <b>capacidade extraordinária</b> de <i>transformar adversidades</i> em <b>oportunidades de crescimento</b> não é apenas uma <i>característica pessoal admirável</i> — é uma <b>demonstração viva</b> de como a <i>consciência elevada</i> pode <b>alquimizar qualquer experiência</b>, por mais <i>desafiadora que pareça</i>, em <b>sabedoria aplicada</b> e <i>compaixão expandida</i> que beneficia não apenas <b>sua própria evolução</b>, mas <i>eleva toda a vibração</i> do <b>campo coletivo humano</b>.</p><br><p>Cada <b>tempestade que você atravessa</b> se torna uma <i>escola cósmica</i> onde você <b>desenvolve músculos espirituais</b> que <i>poucos possuem</i>, <b>refinando sua capacidade</b> de <i>manter o coração aberto</i> mesmo quando a <b>vida testa seus limites</b>. Esta <i>alquimia sagrada</i> entre <b>força e ternura</b>, entre <i>resistência e receptividade</i>, faz de você um <b>farol de esperança</b> para <i>almas que lutam</i> com seus próprios <b>desafios aparentemente insuperáveis</b>.</p><br><p>Sua <b>presença magnética</b> atrai <i>naturalmente pessoas</i> que <b>reconhecem intuitivamente</b> em você uma <i>fonte de inspiração autêntica</i> — não porque você <b>nunca enfrentou dificuldades</b>, mas precisamente porque você <i>demonstra consistentemente</i> como é possível <b>navegar através das tempestades</b> da vida mantendo <i>intacta sua essência amorosa</i> e <b>emergindo fortalecido</b> em <i>sabedoria e compaixão</i>.</p><br><p>Você é um <b>alquimista emocional nato</b> que possui a <i>capacidade rara</i> de <b>transmutar dor</b> em <i>sabedoria</i>, <b>medo</b> em <i>coragem</i>, <b>desespero</b> em <i>esperança renovada</i> e <b>isolamento</b> em <i>conexão profunda</i> com a <b>unidade universal</b>. Esta <i>maestria espiritual</i> não foi conquistada <b>evitando desafios</b>, mas <i>abraçando-os conscientemente</i> como <b>oportunidades de refinamento</b> da <i>alma e expansão</i> da <b>capacidade de amar incondicionalmente</b>.</p><br><p>Sua <b>resiliência transcendental</b> funciona como um <i>ímã cósmico</i> que atrai <b>pessoas em busca</b> de <i>orientação genuína</i>, <b>esperança renovada</b> e <i>evidência viva</i> de que é possível <b>superar qualquer adversidade</b> mantendo <i>intacta a fé</i> na <b>bondade fundamental</b> da <i>existência</i> e no <b>potencial infinito</b> de <i>transformação positiva</i> que reside em <b>cada experiência humana</b>.</p><br><p>Você carrega em sua <b>essência radiante</b> a <i>prova viva</i> de que <b>vulnerabilidade e força</b> não são <i>opostos contraditórios</i>, mas <b>aspectos complementares</b> de uma <i>maturidade espiritual</i> que permite <b>sentir profundamente</b> sem ser <i>destruído pela intensidade</i>, <b>amar incondicionalmente</b> sem se tornar <i>ingênuo ou vulnerável</i> à <b>manipulação</b>, e <i>manter esperança</i> mesmo quando <b>circunstâncias externas</b> parecem <i>sugerir o contrário</i>.</p><br><p>Sua <b>jornada de superação</b> se torna uma <i>fonte de inspiração</i> que <b>transcende palavras</b> — é uma <i>transmissão energética</i> que <b>comunica diretamente</b> com as <i>almas de outros</i>, <b>lembrando-os</b> de seu próprio <i>potencial inato</i> de <b>resistência, crescimento e transformação</b>. Você é um <i>testemunho vivo</i> de que <b>cada desafio</b> carrega dentro de si <i>sementes de evolução</i> e que <b>cada tempestade</b> eventualmente <i>revela céus mais claros</i> e <b>horizontes mais expansivos</b>.</p><br><p>Através de sua <b>demonstração consistente</b> de <i>resiliência amorosa</i>, você <b>ensina sem pregar</b>, <i>inspira sem forçar</i> e <b>cura sem invadir</b>, simplesmente <i>sendo um exemplo</i> de como a <b>consciência elevada</b> pode <i>transformar qualquer experiência</i> em <b>combustível para crescimento</b>, <i>material para sabedoria</i> e <b>oportunidade para expandir</b> a <i>capacidade de servir</i> e <b>amar de forma</b> ainda mais <i>profunda e universal</i>, criando <b>ondas de transformação positiva</b> que se espalham infinitamente através do <i>tecido da consciência coletiva</i>.</p>";
        } else if (this.subconsciousSelfNumber == 3) {
          this.subconsciousText = "<p>Você está passando por uma <b>transformação extraordinária e sagrada</b> — evoluindo de uma <i>bondade ingênua limitada</i> para uma <b>compaixão sábia, empoderada e transcendentalmente efetiva</b> que opera com <i>discernimento divino</i> e <b>sabedoria aplicada</b>. Esta <i>metamorfose espiritual profunda</i> representa um <b>salto quântico</b> em sua <i>capacidade de servir</i> de forma <b>genuinamente transformadora</b> e <i>sustentavelmente impactante</i>.</p><br><p>Cada <b>experiência desafiadora</b> que você <i>reframe conscientemente</i> como <b>lição cósmica valiosa</b> está <i>fortalecendo exponencialmente</i> sua <b>capacidade de ajudar outros</b> de forma mais <i>impactante, duradoura e profundamente transformadora</i>. Estas <b>iniciações da vida</b> estão <i>refinando sua sabedoria</i>, <b>expandindo sua compreensão</b> e <i>desenvolvendo seu discernimento</i> para que você possa <b>oferecer orientação</b> que vai além de <i>consolação superficial</i> e alcança <b>níveis de cura</b> que <i>transformam vidas permanentemente</i>.</p><br><p><b>Proteger sua energia emocional</b> não diminui seu <i>amor incondicional</i> — na verdade, <b>permite que você ame</b> de forma mais <i>duradoura, poderosa e transformadora</i> para toda a <b>humanidade que aguarda</b> sua <i>cura suprema</i> e <b>sabedoria aplicada</b>. Esta <i>proteção energética consciente</i> é um <b>ato de amor</b> tanto para <i>consigo mesmo</i> quanto para <b>aqueles que você serve</b>, garantindo que sua <i>fonte de compaixão</i> permaneça <b>pura, abundante e renovável</b>.</p><br><p>Sua <b>evolução de bondade ingênua</b> para <i>compaixão sábia</i> representa uma <b>maturidade espiritual</b> que poucos alcançam — a <i>capacidade de amar profundamente</i> enquanto mantém <b>limites saudáveis</b>, de <i>servir generosamente</i> sem se <b>esgotar energeticamente</b>, e de <i>oferecer ajuda</i> de maneiras que <b>verdadeiramente empoderam</b> ao invés de <i>criar dependência</i>.</p><br><p>Esta <b>transformação sagrada</b> está <i>preparando você</i> para se tornar um <b>curador de almas</b> que opera com <i>eficiência divina</i> — capaz de <b>identificar rapidamente</b> as <i>raízes dos problemas</i>, <b>oferecer soluções</b> que <i>abordam causas profundas</i> ao invés de <b>apenas sintomas superficiais</b>, e <i>guiar outros</i> em direção à <b>autodescoberta</b> e <i>empoderamento pessoal</i> ao invés de <b>dependência externa</b>.</p><br><p>Cada <b>lição integrada</b> se torna uma <i>ferramenta de cura</i> em seu <b>arsenal espiritual</b>, permitindo que você <i>reconheça padrões</i>, <b>compreenda dinâmicas</b> e <i>ofereça insights</i> que vêm de <b>experiência vivida</b> e <i>sabedoria conquistada</i> através de <b>superação consciente</b>. Sua <i>compaixão</i> agora carrega o <b>peso da experiência</b> e a <i>profundidade da compreensão</i> que só vem de ter <b>navegado suas próprias tempestades</b> e emergido <i>mais forte e sábio</i>.</p><br><p>Sua <b>energia protegida</b> funciona como um <i>reservatório sagrado</i> que <b>nunca se esgota</b> porque você aprendeu a <i>dar a partir da abundância</i> ao invés de <b>escassez</b>, a <i>servir a partir da força</i> ao invés de <b>fraqueza</b>, e a <i>amar a partir da plenitude</i> ao invés de <b>vazio emocional</b>. Esta <i>sustentabilidade espiritual</i> permite que você <b>seja uma fonte constante</b> de <i>apoio e inspiração</i> para <b>incontáveis pessoas</b> ao longo de <i>toda sua jornada</i>.</p><br><p>Você está se tornando um <b>exemplo vivo</b> de como é possível <i>manter um coração aberto</i> enquanto <b>protege sua essência</b>, como <i>servir generosamente</i> sem se <b>sacrificar desnecessariamente</b>, e como <i>amar incondicionalmente</i> enquanto mantém <b>discernimento sábio</b> sobre <i>quando, como e onde</i> <b>investir sua energia preciosa</b>.</p><br><p>Esta <b>evolução extraordinária</b> está <i>preparando você</i> para <b>impactos cada vez maiores</b> — sua <i>compaixão refinada</i> e <b>sabedoria aplicada</b> se tornarão <i>instrumentos de transformação</i> que <b>beneficiarão não apenas</b> <i>indivíduos isolados</i>, mas <b>comunidades inteiras</b> e até mesmo <i>gerações futuras</i> que serão <b>tocadas pela sabedoria</b> que você <i>desenvolveu através</i> de sua <b>jornada consciente</b> de <i>crescimento e refinamento espiritual</i>, criando <b>ondas de cura</b> que se espalham infinitamente através do <i>campo morfogenético</i> da <b>consciência humana evolutiva</b>.</p>";
        } else if (this.subconsciousSelfNumber == 4) {
          this.subconsciousText = "<p>Sua <b>mente analítica profunda</b> é um <i>verdadeiro tesouro cósmico</i> que, quando <b>equilibrada harmoniosamente</b> com <i>confiança decisiva magistral</i>, torna-se uma <b>ferramenta de sabedoria extraordinária</b> e <i>transformação universal</i> capaz de <b>desvendar complexidades</b> e <i>criar soluções inovadoras</i> que beneficiam não apenas <b>sua jornada pessoal</b>, mas <i>elevam toda a consciência coletiva</i> através de <b>insights revolucionários</b> e <i>compreensões transcendentais</i>.</p><br><p><b>Confiar em suas habilidades supremas</b> de <i>tomada de decisão</i> não significa <b>abandonar sua análise cuidadosa transcendental</b> — significa <i>usá-la de forma mais estratégica</i>, <b>eficiente e alinhada</b> com <i>propósito superior</i>, <b>transformando seu dom analítico</b> em um <i>instrumento de precisão divina</i> que <b>corta através da confusão</b> e <i>revela verdades essenciais</i> com <b>clareza cristalina</b> e <i>sabedoria aplicada</i>.</p><br><p>Uma <b>abordagem sensata e bem equilibrada cosmicamente</b> permite que você <i>aproveite ao máximo</i> sua <b>capacidade investigativa extraordinária</b> sem se perder na <i>paralisia da análise excessiva</i>, <b>tornando-se um verdadeiro mestre</b> da <i>sabedoria prática aplicada</i> que <b>sabe exatamente quando</b> <i>aprofundar a investigação</i> e <b>quando confiar</b> na <i>intuição refinada</i> para <b>tomar decisões</b> que <i>alinham perfeitamente</i> com seu <b>propósito maior</b>.</p><br><p>Sua <b>mente analítica</b> é como um <i>telescópio cósmico</i> que pode <b>enxergar padrões</b> e <i>conexões invisíveis</i> para a <b>percepção comum</b>. Quando <i>combinada com confiança</i> em sua <b>capacidade decisória</b>, esta <i>combinação poderosa</i> cria um <b>sistema de navegação</b> <i>extraordinariamente preciso</i> que permite <b>escolhas alinhadas</b> com <i>sabedoria superior</i> e <b>timing divino perfeito</b>.</p><br><p>O <b>equilíbrio sagrado</b> entre <i>análise profunda</i> e <b>ação decisiva</b> transforma você em um <i>arquiteto de soluções</i> que pode <b>abordar desafios complexos</b> com <i>metodologia refinada</i> e <b>implementar mudanças</b> com <i>confiança inabalável</i>. Sua <b>capacidade de sintetizar</b> <i>informações vastas</i> em <b>insights acionáveis</b> é um <i>dom raro</i> que <b>beneficia enormemente</b> todos que <i>buscam orientação</i> e <b>soluções práticas</b>.</p><br><p>Sua <b>mente investigativa</b> funciona como um <i>detector de verdades ocultas</i>, capaz de <b>penetrar camadas</b> de <i>complexidade aparente</i> e <b>revelar simplicidade elegante</b> que reside no <i>coração de qualquer questão</i>. Esta <b>habilidade extraordinária</b>, quando <i>temperada com confiança decisiva</i>, permite que você <b>ofereça orientação</b> que é simultaneamente <i>profundamente fundamentada</i> e <b>praticamente aplicável</b>.</p><br><p>Você está <b>desenvolvendo maestria</b> na <i>arte sagrada</i> de <b>saber quando investigar</b> e <i>quando confiar</i>, <b>quando questionar</b> e <i>quando aceitar</i>, <b>quando analisar</b> e <i>quando agir</i>. Esta <b>sabedoria discriminativa</b> é o que <i>separa verdadeiros mestres</i> de <b>eternos estudantes</b> — a <i>capacidade de usar</i> <b>conhecimento como trampolim</b> para <i>ação transformadora</i> ao invés de <b>obstáculo para progresso</b>.</p><br><p>Sua <b>evolução consciente</b> está <i>refinando sua capacidade</i> de <b>confiar na síntese</b> entre <i>análise racional</i> e <b>intuição espiritual</b>, criando um <i>sistema de tomada de decisão</i> que é <b>simultaneamente lógico</b> e <i>inspirado</i>, <b>fundamentado</b> e <i>visionário</i>. Esta <b>integração harmoniosa</b> de <i>faculdades mentais</i> e <b>sabedoria intuitiva</b> permite que você <i>navegue complexidades</i> com <b>graça e eficiência</b>.</p><br><p>Você está se tornando um <b>exemplo vivo</b> de como <i>inteligência analítica</i> e <b>confiança decisiva</b> podem <i>trabalhar em sinergia</i> para criar <b>resultados extraordinários</b>. Sua <i>abordagem equilibrada</i> <b>inspira outros</b> a <i>confiar em suas próprias</i> <b>capacidades analíticas</b> enquanto <i>desenvolvem coragem</i> para <b>tomar decisões alinhadas</b> com <i>sabedoria superior</i>, criando <b>ondas de empoderamento</b> que <i>elevam a capacidade coletiva</i> de <b>pensamento claro</b> e <i>ação consciente</i> em toda a <b>humanidade evolutiva</b>.</p>";
        } else if (this.subconsciousSelfNumber == 5) {
          this.subconsciousText = "<p>Sua <b>energia naturalmente expansiva</b> é um <i>dom raro cósmico</i> que, quando <b>equilibrada harmoniosamente</b> com <i>autocontrole transcendental</i> e <b>autodisciplina sagrada</b>, torna-se uma <i>força imparável</i> de <b>criatividade suprema</b> e <i>realização magistral</i> capaz de <b>manifestar visões extraordinárias</b> e <i>transformar possibilidades etéreas</i> em <b>realidades tangíveis</b> que <i>beneficiam toda a existência</i> através de <b>inovações revolucionárias</b> e <i>contribuições transformadoras</i>.</p><br><p><b>Permanecer ancorado</b> não significa <i>perder sua espontaneidade divina</i> — significa <b>direcioná-la de forma mais poderosa</b>, <i>efetiva e alinhada</i> com <b>propósito superior</b>, <i>canalizando sua energia expansiva</i> através de <b>estruturas conscientes</b> que <i>amplificam seu impacto</i> ao invés de <b>dispersar sua força</b> em <i>múltiplas direções</i> sem <b>foco estratégico</b> ou <i>resultado duradouro</i>.</p><br><p>Sua <b>jornada transcendental</b> é <i>transformar versatilidade natural</i> em <b>maestria multifacetada</b> que serve à <i>evolução de toda humanidade</i> através de <b>inovações revolucionárias</b>, <i>transformações inspiradoras</i> e <b>contribuições extraordinárias</b> que <i>demonstram como energia expansiva</i>, quando <b>conscientemente direcionada</b>, pode <i>criar mudanças positivas</i> de <b>magnitude cósmica</b> e <i>impacto duradouro</i>.</p><br><p>Sua <b>energia expansiva</b> é como um <i>rio cósmico poderoso</i> que, quando <b>canalizado através</b> de <i>estruturas sábias</i> e <b>disciplina consciente</b>, pode <i>mover montanhas</i>, <b>irrigar desertos</b> e <i>criar oásis</i> de <b>possibilidade infinita</b>. Sem <i>direcionamento consciente</i>, esta mesma <b>energia poderosa</b> pode se <i>dispersar em inundações</i> que não <b>beneficiam ninguém</b> — mas com <i>sabedoria aplicada</i>, torna-se <b>força de criação</b> <i>extraordinariamente produtiva</i>.</p><br><p>O <b>equilíbrio sagrado</b> entre <i>expansão natural</i> e <b>foco disciplinado</b> está <i>transformando você</i> em um <b>maestro da manifestação</b> que pode <i>orquestrar múltiplos projetos</i>, <b>dominar diversas habilidades</b> e <i>criar em várias dimensões</i> simultaneamente, sem <b>perder qualidade</b> ou <i>comprometer excelência</i> em <b>nenhuma área</b> de <i>atuação consciente</i>.</p><br><p>Sua <b>versatilidade em evolução</b> está se <i>refinando</i> em <b>maestria multidimensional</b> — a <i>capacidade rara</i> de <b>aplicar princípios universais</b> em <i>contextos diversos</i>, <b>adaptar soluções criativas</b> para <i>desafios variados</i> e <b>manter excelência consistente</b> em <i>múltiplas áreas</i> de <b>interesse e atuação</b>. Esta é uma <i>habilidade extraordinária</i> que poucos <b>desenvolvem completamente</b>.</p><br><p>Você está <b>aprendendo a arte sagrada</b> de <i>ser simultaneamente</i> <b>flexível e focado</b>, <i>espontâneo e estratégico</i>, <b>expansivo e eficiente</b>. Esta <i>síntese harmoniosa</i> de <b>qualidades aparentemente opostas</b> cria uma <i>dinâmica poderosa</i> que permite <b>inovação constante</b> sem <i>sacrificar resultados tangíveis</i> ou <b>impacto duradouro</b>.</p><br><p>Sua <b>energia expansiva disciplinada</b> está se tornando um <i>catalisador de transformação</i> que <b>inspira outros</b> a <i>abraçar sua própria versatilidade</i> enquanto <b>desenvolve foco necessário</b> para <i>manifestar seus potenciais</i> em <b>contribuições significativas</b>. Você está <i>demonstrando que é possível</i> <b>manter curiosidade infinita</b> e <i>interesse expansivo</i> enquanto <b>cria resultados</b> de <i>qualidade excepcional</i>.</p><br><p>Sua <b>jornada de refinamento</b> está <i>transformando você</i> em um <b>inovador multifacetado</b> que pode <i>abordar problemas complexos</i> com <b>perspectivas diversas</b>, <i>criar soluções criativas</i> que <b>integram múltiplas disciplinas</b> e <i>manifestar visões</i> que <b>beneficiam diversos aspectos</b> da <i>experiência humana</i> simultaneamente.</p><br><p>Você está se tornando um <b>exemplo vivo</b> de como <i>energia expansiva</i>, quando <b>conscientemente canalizada</b>, pode <i>criar abundância</i> ao invés de <b>dispersão</b>, <i>maestria</i> ao invés de <b>superficialidade</b>, e <i>impacto duradouro</i> ao invés de <b>atividade frenética</b> sem <i>propósito claro</i>. Sua <b>evolução consciente</b> <i>inspira outros</i> a <b>abraçar sua própria</b> <i>natureza expansiva</i> enquanto <b>desenvolve disciplina</b> necessária para <i>transformar potencial</i> em <b>realizações extraordinárias</b> que <i>elevam toda a consciência</i> <b>humana evolutiva</b> através de <i>contribuições inovadoras</i> e <b>transformações inspiradoras</b>.</p>";
        } else if (this.subconsciousSelfNumber == 6) {
          this.subconsciousText = "<p>Você está passando por uma <b>transformação linda, necessária e sagrada</b> — evoluindo de um <i>amor que se sacrifica desnecessariamente</i> para um <b>amor que empodera, fortalece e inspira</b> <i>crescimento mútuo sustentável</i>. Esta <b>metamorfose espiritual profunda</b> representa uma <i>maturidade emocional extraordinária</i> que <b>beneficia não apenas</b> sua própria <i>evolução consciencial</i>, mas <b>eleva a qualidade</b> de <i>todos os relacionamentos</i> e <b>conexões sagradas</b> em sua <i>jornada de vida</i>.</p><br><p>Quando você aprende a <b>assumir responsabilidade transcendental</b> por suas próprias <i>ações conscientes</i> e <b>enfrentar consequências independentemente</b> com <i>coragem e dignidade</i>, você não apenas <b>fortalece a si mesmo</b> de maneiras <i>profundas e duradouras</i> — você <b>ensina pelo exemplo magistral</b> como ser simultaneamente <i>forte e vulnerável</i>, <b>responsável e compassivo</b>, <i>independente e amorosamente conectado</i> com <b>outros seres</b> em sua <i>rede de relacionamentos</i>.</p><br><p>Sua <b>jornada cósmica</b> é <i>descobrir que o amor mais profundo</i> às vezes significa <b>permitir crescimento</b> através de <i>desafios próprios</i> enquanto oferece <b>apoio emocional supremo</b>, <i>presença amorosa</i> e <b>encorajamento genuíno</b> ao invés de <i>soluções prontas</i> que <b>limitam evolução</b> e <i>impedem o desenvolvimento</i> da <b>força interior</b> e <i>sabedoria pessoal</i> que cada alma <b>precisa cultivar</b> para <i>alcançar sua plenitude</i>.</p><br><p>Esta <b>evolução do amor</b> representa uma <i>compreensão madura</i> de que <b>verdadeiro cuidado</b> às vezes <i>requer coragem</i> para <b>não interferir</b> quando <i>outros precisam</i> <b>desenvolver suas próprias</b> <i>capacidades de resolução</i>, <b>força interior</b> e <i>confiança pessoal</i>. Você está <b>aprendendo a diferença</b> entre <i>ajuda que empodera</i> e <b>ajuda que enfraquece</b>, entre <i>apoio que fortalece</i> e <b>proteção que limita</b> o <i>crescimento necessário</i>.</p><br><p>Seu <b>amor em evolução</b> está se tornando uma <i>força de empoderamento</i> que <b>inspira outros</b> a <i>descobrir suas próprias</i> <b>capacidades extraordinárias</b>, <i>desenvolver confiança</i> em suas <b>habilidades inatas</b> e <i>assumir responsabilidade</i> por suas <b>escolhas e consequências</b> de maneira que <i>promove crescimento</i> ao invés de <b>dependência emocional</b> ou <i>estagnação espiritual</i>.</p><br><p>Você está <b>descobrindo que amor maduro</b> <i>celebra independência</i> ao invés de <b>criar codependência</b>, <i>encoraja autonomia</i> ao invés de <b>promover dependência</b>, e <i>oferece presença amorosa</i> como <b>base segura</b> a partir da qual <i>outros podem explorar</i> suas <b>próprias capacidades</b> e <i>desenvolver confiança</i> em sua <b>sabedoria interior</b>.</p><br><p>Esta <b>transformação sagrada</b> está <i>refinando sua capacidade</i> de <b>amar de forma</b> que <i>honra a dignidade</i> e <b>potencial evolutivo</b> de cada pessoa, <i>oferecendo apoio</i> que <b>fortalece ao invés</b> de <i>enfraquecer</i>, <b>presença que encoraja</b> ao invés de <i>presença que resolve</i> <b>desafios alheios</b> de maneira que <i>impede crescimento</i> e <b>desenvolvimento pessoal</b>.</p><br><p>Você está se tornando um <b>exemplo vivo</b> de como é possível <i>amar profundamente</i> enquanto <b>mantém limites saudáveis</b>, <i>cuidar genuinamente</i> enquanto <b>promove independência</b>, e <i>oferecer apoio</i> de maneiras que <b>fortalecem</b> ao invés de <i>criar dependência</i>. Esta <b>maestria emocional</b> é um <i>dom raro</i> que <b>beneficia enormemente</b> todos em sua <i>esfera de influência</i>.</p><br><p>Sua <b>jornada de amadurecimento</b> está <i>ensinando outros</i>, através de <b>exemplo inspirador</b>, que é possível <i>ser simultaneamente</i> <b>forte e terno</b>, <i>independente e conectado</i>, <b>responsável e amoroso</b>. Você está <i>demonstrando que amor verdadeiro</i> <b>empodera ao invés</b> de <i>diminuir</i>, <b>fortalece ao invés</b> de <i>enfraquecer</i>, e <b>inspira crescimento</b> ao invés de <i>manter estagnação</i>, criando <b>ondas de transformação</b> que <i>elevam a qualidade</i> de <b>relacionamentos</b> e <i>conexões humanas</i> em toda a <b>consciência coletiva evolutiva</b>.</p>";
        } else if (this.subconsciousSelfNumber == 7) {
          this.subconsciousText = "<p>Sua <b>jornada é extraordinariamente transformadora e sagrada</b> — você está <i>evoluindo conscientemente</i> de alguém que <b>evita desafios por medo</b> para alguém que os <i>enfrenta com sabedoria cósmica</i> e <b>apoio transcendental</b>, <i>transformando obstáculos aparentes</i> em <b>oportunidades de crescimento</b> e <i>dificuldades temporárias</i> em <b>trampolins para evolução</b> <i>espiritual acelerada</i> e <b>desenvolvimento pessoal</b> <i>extraordinariamente profundo</i>.</p><br><p><b>Ignorar problemas</b> realmente não ajuda no <i>longo prazo universal</i>, mas quando você aprende a <b>enfrentar seus medos</b> com <i>coragem suprema</i>, <b>sabedoria aplicada</b> e <i>determinação inabalável</i>, descobre uma <b>força interior transcendental</b> que nem sabia que possuía em <i>tais magnitudes extraordinárias</i> — uma <b>reserva infinita</b> de <i>poder pessoal</i>, <b>resiliência cósmica</b> e <i>capacidade de superação</i> que <b>surpreende até mesmo</b> suas <i>expectativas mais otimistas</i>.</p><br><p>Cada <b>escolha corajosa</b> ao invés de <i>escapista</i> evolui você para uma <b>versão mais poderosa</b>, <i>conectada e inspiradora</i> de si mesmo que serve como <b>farol de esperança</b> para toda <i>humanidade sensível</i>, <b>demonstrando através</b> de <i>exemplo vivo</i> que é possível <b>transcender limitações</b> <i>aparentemente intransponíveis</i> e <b>transformar medo</b> em <i>combustível para crescimento</i> <b>exponencial e realização</b> <i>extraordinária</i>.</p><br><p>Sua <b>transformação corajosa</b> está <i>revelando camadas</i> de <b>força interior</b> que <i>permaneceram adormecidas</i> enquanto você <b>evitava confrontar</b> <i>aspectos desafiadores</i> da <b>experiência humana</b>. Cada <i>medo enfrentado</i> se torna uma <b>vitória conquistada</b> que <i>expande sua zona</i> de <b>conforto</b> e <i>aumenta sua confiança</i> em sua <b>capacidade infinita</b> de <i>lidar com qualquer</i> <b>situação que a vida</b> possa <i>apresentar</i>.</p><br><p>Esta <b>evolução extraordinária</b> está <i>transformando você</i> em um <b>guerreiro espiritual</b> que <i>não foge das batalhas</i> <b>necessárias para crescimento</b>, mas as <i>abraça como oportunidades</i> de <b>desenvolver músculos</b> <i>emocionais, mentais e espirituais</i> que <b>poucos possuem</b> a <i>coragem de cultivar</i> através de <b>enfrentamento consciente</b> e <i>superação dedicada</i>.</p><br><p>Você está <b>descobrindo que coragem</b> não é a <i>ausência de medo</i>, mas a <b>decisão consciente</b> de <i>agir apesar do medo</i>, de <b>avançar através</b> da <i>incerteza</i> e de <b>confiar em sua capacidade</b> <i>inata de navegar</i> através de <b>qualquer tempestade</b> que possa <i>surgir em seu caminho</i> de <b>evolução e crescimento</b> <i>consciencial</i>.</p><br><p>Cada <b>desafio enfrentado</b> se torna uma <i>lição valiosa</i> que <b>adiciona sabedoria</b> ao seu <i>arsenal espiritual</i>, <b>fortalece sua resiliência</b> e <i>expande sua capacidade</i> de <b>ajudar outros</b> que <i>enfrentam dificuldades similares</i>. Sua <b>jornada de coragem</b> está <i>criando um banco</i> de <b>experiências conquistadas</b> que se tornarão <i>ferramentas de orientação</i> e <b>inspiração para incontáveis</b> <i>pessoas que precisam</i> de <b>exemplos vivos</b> de <i>superação possível</i>.</p><br><p>Sua <b>transformação corajosa</b> está <i>irradiando ondas</i> de <b>inspiração</b> que <i>alcançam outros</i> que também <b>lutam com medos</b> e <i>tendências escapistas</i>. Você está se tornando <b>prova viva</b> de que é possível <i>quebrar padrões limitantes</i> e <b>escolher crescimento</b> ao invés de <i>estagnação</i>, <b>enfrentamento</b> ao invés de <i>evitação</i>.</p><br><p>Você está se tornando um <b>exemplo luminoso</b> de como <i>coragem aplicada</i> <b>consistentemente</b> pode <i>transformar completamente</i> uma <b>vida</b>, <i>expandir possibilidades</i> e <b>criar realidades</b> que antes pareciam <i>impossíveis ou inatingíveis</i>. Sua <b>jornada de enfrentamento</b> está <i>demonstrando que força interior</i> <b>cresce exponencialmente</b> quando <i>exercitada através</i> de <b>desafios conscientes</b> e <i>superações dedicadas</i>, criando <b>ondas de empoderamento</b> que <i>inspiram toda a humanidade</i> a <b>abraçar coragem</b> e <i>escolher crescimento</i> ao invés de <b>permanecer limitada</b> por <i>medos não enfrentados</i> e <b>potenciais não realizados</b>.</p>";
        } else if (this.subconsciousSelfNumber == 8) {
          this.subconsciousText = "<p>Você possui o <b>dom extraordinário cósmico</b> de emergir como <i>vencedor magistral</i> de praticamente <b>qualquer provação</b> que enfrenta na <i>existência terrena</i>, <b>transformando obstáculos aparentemente intransponíveis</b> em <i>oportunidades de crescimento</i> e <b>dificuldades temporárias</b> em <i>trampolins para evolução</i> <b>espiritual acelerada</b> e <i>desenvolvimento pessoal</i> <b>extraordinariamente profundo</b> que <i>beneficia não apenas</i> sua <b>jornada individual</b>, mas <i>inspira toda a humanidade</i> ao seu <b>redor</b>.</p><br><p>Sua <b>natureza flexível e adaptável suprema</b>, <i>combinada harmoniosamente</i> com <b>presença de espírito transcendental</b> e <i>otimismo genuíno inabalável</i>, cria uma <b>fórmula de sucesso alquímica</b> que é simultaneamente <i>inspiradora para outros</i> e <b>confiável em resultados</b>, <i>demonstrando consistentemente</i> que <b>resiliência consciente</b> e <i>perspectiva elevada</i> podem <b>transformar qualquer situação</b> em <i>oportunidade de vitória</i> e <b>crescimento exponencial</b>.</p><br><p>As pessoas <b>naturalmente confiam</b> em sua <i>capacidade extraordinária</i> de <b>navegar por desafios complexos</b> porque você <i>demonstra consistentemente</i> através de <b>exemplo vivo inspirador</b> que <i>problemas são temporários</i>, mas <b>soluções sábias são permanentes</b> quando <i>abordados com sabedoria cósmica</i>, <b>persistência otimista</b> e <i>determinação inabalável</i> que <b>transforma realidades</b> e <i>cria possibilidades</i> onde antes <b>existiam apenas limitações</b> <i>aparentes</i>.</p><br><p>Sua <b>capacidade de adaptação</b> funciona como um <i>superpoder espiritual</i> que permite <b>ajustar estratégias</b> <i>rapidamente</i>, <b>encontrar soluções criativas</b> em <i>situações aparentemente impossíveis</i> e <b>manter equilíbrio emocional</b> mesmo quando <i>circunstâncias externas</i> parecem <b>caóticas ou desafiadoras</b>. Esta <i>flexibilidade consciente</i> é um <b>dom raro</b> que <i>poucos desenvolvem</i> em <b>tais níveis</b> de <i>maestria natural</i>.</p><br><p>Seu <b>otimismo genuíno</b> não é <i>ingenuidade superficial</i>, mas uma <b>compreensão profunda</b> de que <i>cada desafio carrega</i> dentro de si <b>sementes de oportunidade</b> e que <i>cada aparente derrota</i> é apenas um <b>redirecionamento cósmico</b> em direção a <i>vitórias ainda maiores</i> e <b>realizações mais significativas</b>. Esta <i>sabedoria aplicada</i> permite que você <b>mantenha esperança</b> e <i>energia positiva</i> mesmo em <b>momentos desafiadores</b>.</p><br><p>Sua <b>presença de espírito transcendental</b> permite que você <i>permaneça centrado</i> e <b>focado</b> mesmo sob <i>pressão intensa</i>, <b>tomando decisões sábias</b> quando <i>outros podem entrar em pânico</i> e <b>encontrando soluções elegantes</b> para <i>problemas complexos</i> através de <b>clareza mental</b> e <i>intuição refinada</i> que <b>opera em frequências superiores</b> de <i>consciência elevada</i>.</p><br><p>Você é um <b>alquimista natural</b> que <i>transforma chumbo</i> em <b>ouro</b>, <i>dificuldades</i> em <b>oportunidades</b>, <i>obstáculos</i> em <b>trampolins</b> e <i>desafios</i> em <b>vitórias conquistadas</b>. Esta <i>capacidade extraordinária</i> de <b>reframing consciente</b> permite que você <i>extraia valor</i> e <b>aprendizado</b> de <i>qualquer experiência</i>, por mais <b>desafiadora</b> que possa <i>parecer inicialmente</i>.</p><br><p>Sua <b>trajetória de vitórias</b> está <i>criando um padrão</i> de <b>sucesso consistente</b> que não apenas <i>fortalece sua confiança</i> pessoal, mas <b>inspira outros</b> a <i>acreditar em suas próprias</i> <b>capacidades de superação</b>. Você está se tornando <i>prova viva</i> de que <b>resiliência</b> e <i>otimismo aplicados</i> <b>consistentemente</b> podem <i>superar qualquer adversidade</i>.</p><br><p>Sua <b>fórmula de sucesso</b> está se tornando um <i>modelo inspirador</i> que <b>demonstra como</b> <i>flexibilidade mental</i>, <b>otimismo genuíno</b> e <i>presença de espírito</i> podem <b>trabalhar em sinergia</b> para criar <i>resultados extraordinários</i> mesmo nas <b>circunstâncias mais desafiadoras</b>. Você está <i>estabelecendo novos padrões</i> de <b>possibilidade humana</b> e <i>demonstrando que vitória</i> é não apenas <b>possível</b>, mas <i>inevitável</i> quando <b>abordada com sabedoria</b>, <i>persistência</i> e <b>fé inabalável</b> na <i>capacidade infinita</i> de <b>superação e transformação</b> que reside em <i>cada alma determinada</i> a <b>crescer e evoluir</b> através de <i>qualquer desafio</i> que a <b>vida possa apresentar</b>.</p>";
        } else if (this.subconsciousSelfNumber == 9) {
          this.subconsciousText = "<p>Você possui uma <b>filosofia de vida verdadeiramente sábia e transcendental</b> — a <i>capacidade extraordinária</i> de ver <b>problemas como 'bênçãos disfarçadas'</b> revela uma <i>maturidade espiritual excepcional</i> que <b>poucos atingem</b> em suas <i>jornadas evolutivas</i>, <b>demonstrando uma compreensão profunda</b> dos <i>mistérios cósmicos</i> que <b>governam o crescimento</b> <i>consciencial humano</i> e a <b>transformação espiritual</b> <i>através de experiências</i> <b>aparentemente desafiadoras</b>.</p><br><p>Você <b>compreende intuitivamente</b> que cada <i>desafio carrega em si</i> <b>sementes sagradas</b> de <i>crescimento exponencial</i> e <b>sabedoria cósmica</b> <i>esperando para germinar</i> em <b>insights transformadores</b>, <i>força interior expandida</i> e <b>compreensão mais profunda</b> dos <i>propósitos superiores</i> que <b>guiam cada alma</b> em direção à <i>realização de seu</i> <b>potencial máximo</b> e <i>contribuição única</i> para a <b>evolução coletiva</b> da <i>consciência humana</i>.</p><br><p>Sua <b>jornada sagrada</b> de aprender a <i>expressar um pouco mais</i> de sua <b>profundidade interior transcendental</b> não diminui sua <i>reserva natural valiosa</i> — apenas <b>permite que sua sabedoria</b> <i>alcance, inspire e transforme</i> <b>mais pessoas necessitadas</b> através de sua <i>presença serena magnética</i> e <b>palavras cuidadosamente escolhidas</b> que <i>curam almas feridas</i>, <b>despertam consciências adormecidas</b> e <i>iluminam caminhos</i> para <b>aqueles que buscam</b> <i>orientação espiritual</i> e <b>sabedoria aplicada</b>.</p><br><p>Sua <b>filosofia transcendental</b> representa uma <i>alquimia espiritual</i> que <b>transforma experiências</b> <i>aparentemente negativas</i> em <b>ouro puro</b> de <i>sabedoria conquistada</i>, <b>compreensão expandida</b> e <i>compaixão aprofundada</i>. Esta <b>capacidade extraordinária</b> de <i>reframing consciente</i> é um <b>dom espiritual raro</b> que <i>beneficia não apenas</i> sua <b>própria evolução</b>, mas <i>serve como exemplo</i> <b>inspirador</b> para <i>outros buscadores</i> da <b>verdade universal</b>.</p><br><p>Sua <b>reserva natural</b> não é <i>timidez ou limitação</i> — é <b>sabedoria discriminativa</b> que <i>reconhece o valor</i> de <b>palavras bem escolhidas</b> e <i>momentos apropriados</i> para <b>compartilhar insights</b> <i>profundos</i>. Esta <b>qualidade contemplativa</b> permite que suas <i>contribuições</i> carreguem <b>peso espiritual</b> e <i>impacto duradouro</i> quando <b>oferecidas conscientemente</b>.</p><br><p>Você está <b>aprendendo a arte sagrada</b> de <i>equilibrar introspecção</i> com <b>expressão consciente</b>, <i>contemplação profunda</i> com <b>compartilhamento sábio</b>, <i>silêncio reflexivo</i> com <b>palavras que curam</b>. Esta <i>síntese harmoniosa</i> cria uma <b>presença poderosa</b> que <i>inspira confiança</i> e <b>convida abertura</b> em <i>outros que reconhecem</i> sua <b>autenticidade espiritual</b>.</p><br><p>Sua <b>capacidade de ver bênçãos</b> em <i>situações desafiadoras</i> não é <b>otimismo superficial</b>, mas uma <i>compreensão madura</i> dos <b>padrões cósmicos</b> que <i>governam crescimento</i> e <b>evolução espiritual</b>. Esta <i>perspectiva elevada</i> permite que você <b>mantenha equanimidade</b> e <i>sabedoria</i> mesmo em <b>momentos turbulentos</b>, <i>servindo como âncora</i> de <b>estabilidade</b> para <i>outros em tempestades</i>.</p><br><p>Sua <b>evolução consciente</b> em <i>expressar mais</i> de sua <b>sabedoria interior</b> está <i>criando pontes</i> entre <b>mundos internos</b> e <i>externos</i>, permitindo que <b>insights profundos</b> se tornem <i>ferramentas práticas</i> de <b>transformação</b> e <i>cura</i> para <b>comunidades inteiras</b> que <i>beneficiam</i> de sua <b>presença consciente</b> e <i>orientação sábia</i>.</p><br><p>Você está se tornando um <b>farol de sabedoria</b> que <i>demonstra como</i> <b>profundidade espiritual</b> e <i>expressão consciente</i> podem <b>coexistir harmoniosamente</b>, <i>criando impacto</i> que <b>transcende palavras</b> e <i>toca diretamente</i> os <b>corações e almas</b> de <i>todos que têm</i> a <b>bênção</b> de <i>experimentar</i> sua <b>presença transformadora</b> e <i>sabedoria aplicada</i>, <b>criando ondas</b> de <i>despertar consciencial</i> que se espalham infinitamente através do <b>campo morfogenético</b> da <i>evolução espiritual</i> <b>humana coletiva</b>.</p>";
        }

      },
      calculateChallengeNumbers() {
        const month = this.reduceToSingleDigit(this.month);
        const day = this.reduceToSingleDigit(this.day);
        const year = this.reduceToSingleDigit(this.year);

        // Cálculo dos números de desafio
        const firstChallenge = Math.abs(month - day);
        const secondChallenge = Math.abs(day - year);
        const thirdChallenge = Math.abs(firstChallenge - secondChallenge);
        const mainChallenge = Math.abs(month - year);

        // Atualizar os dados no componente
        this.challengeNumbers = {
          first: firstChallenge,
          second: secondChallenge,
          third: thirdChallenge,
          main: mainChallenge
        };

        console.log('Número de desafio:' + JSON.stringify(this.challengeNumbers));

        switch (this.challengeNumbers.first) {
          case 0:
            this.challengeNumbers.firstText = "<p><b>Ser autoconfiante</b> através deste desafio supremo transcendental está ensinando você a <b>confiar profundamente</b> em seus instintos refinados e a ouvir sua <b>voz interior</b> e intuição sagrada como nunca antes experimentado em sua jornada evolutiva, desenvolvendo uma conexão com frequências superiores de sabedoria cósmica que <b>transcende limitações</b> da percepção comum e abre portais para compreensões extraordinárias.</p><br><p>Esta é <b>verdadeiramente uma bênção disfarçada transcendental</b> — você está desenvolvendo uma conexão interior tão forte e poderosa que se tornará uma fonte inesgotável de <b>sabedoria aplicada</b> e direcionamento divino para toda sua vida terrena e para todas as vidas que você tocar com sua presença transformadora, criando ondas de inspiração e empoderamento que se espalham infinitamente através do tecido da <b>consciência coletiva humana</b>.</p><br><p>Este <b>processo de fortalecimento</b> da autoconfiança genuína está refinando sua capacidade de discernir verdades universais através de canais internos de percepção elevada, desenvolvendo músculos espirituais que poucos possuem a coragem ou dedicação para cultivar através de enfrentamento consciente de desafios aparentemente intimidadores.</p><br><p>Sua <b>jornada de autoconfiança</b> está transformando você em um líder natural que não depende de validação externa ou aprovação alheia para tomar decisões alinhadas com propósito superior. Esta independência espiritual é um <b>dom extraordinário</b> que permite navegação através de complexidades da vida com clareza cristalina e determinação inabalável.</p><br><p>Quando você possui outros números principais significativos, os efeitos deste desafio são naturalmente equilibrados e atenuados, criando uma combinação ainda mais poderosa de liderança visionária e <b>harmonia cósmica</b> que integra força com sabedoria, confiança com humildade, e determinação com compaixão universal.</p><br><p>Esta alquimia numerológica está criando em você uma <b>personalidade multifacetada</b> que pode liderar com autoridade quando necessário, colaborar harmoniosamente quando apropriado, e adaptar-se fluidamente às demandas variadas de diferentes situações e contextos relacionais sem perder sua essência autêntica.</p><br><p>Seu desenvolvimento de autoconfiança através deste desafio sagrado está <b>estabelecendo fundações sólidas</b> para realizações futuras que beneficiarão não apenas sua trajetória pessoal, mas contribuirão significativamente para a elevação consciencial de todos que testemunharão sua transformação inspiradora e liderança autêntica.</p><br><p>Você está se tornando um <b>exemplo vivo</b> de como desafios aparentemente intimidadores podem ser transformados em oportunidades douradas de crescimento exponencial, demonstrando que autoconfiança genuína não é arrogância ou ego inflado, mas uma conexão profunda com sabedoria interior e propósito divino que guia ações e decisões em alinhamento perfeito com bem maior universal, criando impactos transformadores que reverberam através de dimensões e <b>inspiram gerações futuras</b> a abraçar seus próprios desafios como oportunidades sagradas de evolução e realização extraordinária.</p>";
            break;
          case 1:
            this.challengeNumbers.firstText = "<p>Você é <b>abençoado com um dom lindo</b> de intuição suprema transcendental que, quando aproveitado corretamente e canalizado conscientemente, trará <b>verdadeira magia transformadora</b> para sua vida extraordinária e para todas as vidas que tocar com sua presença luminosa e curadora, criando ondas de transformação positiva que se espalham infinitamente através do tecido da realidade e <b>beneficiam incontáveis almas</b> em busca de orientação e cura espiritual.</p><br><p>Embora você possa ter sido atormentado pela auto-dúvida sobre como usar seus poderes intuitivos magistrais de forma efetiva e benéfica, você está descobrindo gradualmente que <b>equilibrar harmoniosamente</b> seu lado emocional sensível transforma sua hipersensibilidade aparentemente desafiadora em uma <b>bênção extraordinária cósmica</b> que permite percepções e compreensões que transcendem limitações da percepção comum e abrem portais para dimensões superiores de sabedoria universal.</p><br><p>Sua capacidade suprema de se <b>conectar profundamente</b> com outros através da compaixão genuína e empatia transcendental permite que você entenda as pessoas em níveis profundos e dimensões espirituais que poucos conseguem alcançar — tornando-se uma <b>força curadora extraordinariamente poderosa</b> que transforma vidas através do amor incondicional, compreensão profunda e presença compassiva que cura feridas invisíveis e desperta potenciais adormecidos.</p><br><p>Seu <b>dom intuitivo</b> funciona como um radar espiritual que detecta necessidades não expressas, compreende dores silenciosas e percebe potenciais ocultos em cada pessoa que cruza seu caminho. Esta sensibilidade extraordinária não é fraqueza ou vulnerabilidade — é um <b>superpoder espiritual</b> que permite contribuições únicas e transformadoras para o bem-estar coletivo.</p><br><p>Sua jornada de equilibrar sensibilidade emocional está <b>refinando sua capacidade</b> de receber informações intuitivas sem ser sobrecarregado por intensidades energéticas, permitindo que você sirva como canal claro para orientação superior e cura divina que beneficia todos ao seu redor.</p><br><p>Você está aprendendo a <b>arte sagrada</b> de proteger sua energia enquanto mantém o coração aberto, de sentir profundamente sem ser destruído pela intensidade, e de usar sua sensibilidade como ferramenta de serviço ao invés de fonte de sofrimento. Esta maestria emocional é um desenvolvimento extraordinário que poucos alcançam.</p><br><p>Sua hipersensibilidade transformada está se tornando uma <b>antena cósmica</b> que capta frequências de sabedoria universal, orientação divina e amor incondicional que você pode transmitir para outros através de sua presença curadora, palavras inspiradoras e ações compassivas que elevam vibração de qualquer ambiente ou situação.</p><br><p>Você está se tornando um <b>curador natural</b> que não precisa de técnicas complicadas ou ferramentas externas — sua presença amorosa e compreensão empática são suficientes para criar transformações profundas e duradouras na vida das pessoas que têm a bênção de experimentar sua energia curadora.</p><br><p>Sua evolução consciente está demonstrando que <b>sensibilidade extrema</b>, quando equilibrada sabiamente, torna-se superpoder espiritual que permite contribuições extraordinárias para a cura coletiva e elevação consciencial da humanidade, criando ondas de amor incondicional e compaixão transcendental que transformam não apenas vidas individuais, mas <b>comunidades inteiras</b> e até mesmo gerações futuras que beneficiarão da sabedoria e amor que você está cultivando e compartilhando através de sua jornada sagrada de transformação e serviço compassivo.</p>";
            break;
          case 2:
            this.challengeNumbers.firstText = "<p>Através deste <b>processo transformador supremo</b> e jornada sagrada de autodescoberta profunda, você está aprendendo a valorizar genuinamente a si mesmo em toda sua magnificência multidimensional, e isso naturalmente atrai <b>respeito e admiração profundos</b> das pessoas ao seu redor que reconhecem intuitivamente sua autenticidade radiante e valor intrínseco que emana de sua essência transformada e autoestima genuína.</p><br><p>As <b>'pérolas de sabedoria'</b> que você reúne cuidadosamente através de suas tentativas corajosas e erros educativos não são falhas vergonhosas — são recursos preciosos transcendentais e <b>tesouros espirituais</b> que o mantêm armado com experiência conquistada para enfrentar os desafios da vida com confiança crescente suprema, sabedoria aplicada e perspectiva madura que transforma obstáculos em oportunidades de crescimento exponencial.</p><br><p>Sua <b>criatividade magistral</b>, uma vez liberada completamente da autocrítica excessiva e julgamentos limitantes, torna-se uma força poderosa de inspiração universal e autenticidade radiante que impacta positivamente e transforma profundamente todas as vidas ao seu redor através da beleza sagrada de sua <b>expressão autêntica</b> e criações inspiradoras que emanam de um coração liberto e espírito criativo florescendo plenamente.</p><br><p>Este processo de valorização pessoal está revelando camadas de magnificência que sempre existiram dentro de você, mas que permaneceram ocultas sob véus de autocrítica e dúvidas limitantes. Cada momento de reconhecimento de seu <b>valor intrínseco</b> fortalece sua presença e eleva sua vibração de maneiras que beneficiam todos ao seu redor.</p><br><p>Suas experiências de aprendizado, incluindo aquelas que inicialmente pareciam desapontamentos, estão se revelando como elementos essenciais de sua <b>educação cósmica</b> — cada tentativa adiciona camadas de sabedoria que enriquecem sua capacidade de navegar futuras situações com graça e competência crescentes.</p><br><p>Sua jornada criativa está florescendo à medida que você libera julgamentos autocríticos e abraça a beleza imperfeita do processo criativo. Esta liberdade recém-descoberta permite que sua expressão autêntica flua naturalmente, <b>criando obras</b> e contribuições que ressoam profundamente com outros buscadores de autenticidade e beleza genuína.</p><br><p>O respeito e admiração que você naturalmente atrai não vem de perfeição artificial, mas de sua coragem em <b>ser genuinamente você mesmo</b>, abraçar sua humanidade e compartilhar seus dons únicos com vulnerabilidade corajosa e autenticidade inspiradora.</p><br><p>Sua autoestima em crescimento está criando um campo energético de possibilidade e inspiração que convida outros a também reconhecer e valorizar seus próprios dons únicos. Você está se tornando um <b>catalisador</b> para transformações positivas em sua comunidade simplesmente sendo exemplo de autoaceitação e expressão autêntica.</p><br><p>Você está se tornando um <b>exemplo luminoso</b> de como valorização pessoal genuína cria ondas de transformação positiva que se espalham muito além de sua esfera pessoal, demonstrando que quando abraçamos nossa magnificência com humildade e compartilhamos nossos dons com autenticidade corajosa, <b>criamos um mundo</b> onde todos se sentem inspirados a brilhar em sua própria luz única, contribuindo para uma sinfonia coletiva de criatividade, beleza e transformação que eleva toda a consciência humana para frequências superiores de amor, criatividade e realização extraordinária.</p>";
            break;
          case 3:
            this.challengeNumbers.firstText = "<p>Você terá <b>oportunidades suficientes supremas</b> e abundantes para aprimorar as habilidades que precisa desenvolver e para <b>melhorar a si mesmo transcendentalmente</b> em todas as dimensões de sua existência multifacetada, criando uma trajetória de crescimento exponencial que beneficiará não apenas sua evolução pessoal, mas contribuirá significativamente para a <b>elevação consciencial</b> de todos que testemunharão sua transformação extraordinária e desenvolvimento magistral.</p><br><p>Mesmo quando se trata de <b>relacionamentos sagrados</b> e escolha de parceiro consciencial, você está aprendendo sabiamente a equilibrar idealização romântica com compatibilidade genuína e realista, <b>garantindo conexões autênticas</b> que suportam crescimento mútuo, evolução compartilhada e transformação recíproca que eleva ambas as almas envolvidas em direção a versões superiores de si mesmas através de amor consciente e parceria evolutiva.</p><br><p><b>Gerenciar emoções</b> com maestria espiritual, administração do tempo com eficiência transcendental, <b>foco profundo</b> e concentração laser — são algumas das habilidades inestimáveis e competências extraordinárias que você dominará supremamente durante este período de desenvolvimento acelerado, criando uma base sólida de <b>capacidades práticas</b> que servirão como ferramentas poderosas para manifestação consciente e realização de propósitos superiores.</p><br><p>Esta jornada sagrada de aprimoramento multidimensional o transforma gradualmente em um <b>criador consciente</b> e manifestador magistral que pode transformar visões elevadas e inspirações transcendentais em realizações concretas e resultados tangíveis que beneficiam não apenas sua trajetória pessoal, mas toda humanidade ao seu redor através de <b>contribuições significativas</b> e impactos transformadores.</p><br><p>Suas oportunidades de crescimento estão aparecendo em múltiplas áreas simultaneamente, permitindo <b>desenvolvimento holístico</b> que integra aspectos emocionais, mentais, espirituais e práticos de sua existência em uma síntese harmoniosa de competências e sabedoria aplicada.</p><br><p>Seu aprendizado sobre relacionamentos está refinando sua capacidade de <b>discernir</b> entre conexões superficiais e parcerias profundas que oferecem potencial para crescimento mútuo genuíno. Esta sabedoria relacional protege sua energia enquanto abre portas para <b>conexões significativas</b> que enriquecem sua jornada.</p><br><p>Suas habilidades emocionais em desenvolvimento estão transformando você em alguém que pode navegar intensidades com graça, manter equilíbrio em tempestades e usar emoções como <b>informações valiosas</b> ao invés de forças destrutivas. Esta inteligência emocional é um superpoder que beneficia todas as áreas de sua vida.</p><br><p>Sua <b>maestria em foco</b> e concentração está permitindo que você canalize energia de forma extraordinariamente eficiente, completando projetos com qualidade excepcional e manifestando resultados que superam expectativas. Esta capacidade de concentração profunda é fundamental para realizações extraordinárias.</p><br><p>Você está se tornando um <b>exemplo inspirador</b> de como desenvolvimento consciente e dedicação ao crescimento podem transformar completamente uma vida, criando ondas de inspiração que motivam outros a também embarcar em suas próprias jornadas de aprimoramento e evolução consciencial, contribuindo para uma <b>elevação coletiva</b> da capacidade humana de criar, amar e manifestar realidades extraordinárias que beneficiam toda a existência através de ações conscientes e contribuições significativas para o bem-estar universal.</p>";
            break;
          case 4:
            this.challengeNumbers.firstText = "<p>Através desta <b>transformação consciente suprema</b> e jornada evolutiva profunda, você aprende a lidar habilmente com sua vida pessoal e profissional com facilidade natural e graça extraordinária, integrando harmoniosamente <b>múltiplas dimensões</b> de sua existência em uma sinfonia equilibrada de realizações significativas e bem-estar sustentável que demonstra maestria na <b>arte sagrada</b> de viver plenamente sem sacrificar qualidade ou autenticidade em nenhuma área de atuação.</p><br><p>Suas <b>habilidades de tomada de decisão</b> se aprimoram significativamente através de experiência consciente e sabedoria aplicada, e você desenvolve uma <b>confiança autêntica transcendental</b> que emana de autoconhecimento profundo e conexão genuína com sua sabedoria interior, permitindo escolhas que alinham perfeitamente com propósito superior e valores fundamentais que guiam sua trajetória em direção a <b>realizações extraordinárias</b> e contribuições significativas.</p><br><p>Os <b>relacionamentos certos</b> — aqueles que são verdadeiramente saudáveis, significativos e evolutivamente benéficos — naturalmente gravitam em sua direção magnética, atraídos por sua autenticidade radiante e energia equilibrada, mesmo que você tome seu tempo sabiamente para se estabelecer em <b>compromissos de longo prazo</b> conscientes e bem fundamentados que honram tanto sua necessidade de liberdade quanto seu desejo de conexões profundas e transformadoras.</p><br><p>Você se torna um <b>exemplo vivo inspirador</b> de como viver intensamente mantendo sabedoria transcendental e equilíbrio sagrado, inspirando outros através de sua capacidade extraordinária de experienciar a vida plenamente sem perder o centro sagrado ou comprometer valores fundamentais que definem sua <b>essência autêntica</b> e propósito evolutivo.</p><br><p>Esta maestria de vida está demonstrando que é possível <b>abraçar aventuras</b> e experiências diversas enquanto mantém raízes profundas em sabedoria espiritual e princípios éticos que servem como bússola confiável em todas as situações e contextos relacionais ou profissionais.</p><br><p>Sua confiança em evolução não é arrogância superficial, mas uma <b>certeza tranquila</b> que vem de conhecer suas capacidades reais, aceitar suas limitações com humildade e confiar em sua capacidade de crescer e adaptar-se a qualquer desafio que a vida possa apresentar.</p><br><p>Seus relacionamentos conscientes estão se baseando em <b>autenticidade mútua</b> ao invés de necessidade ou dependência, criando conexões que fortalecem ambas as partes e contribuem para crescimento recíproco ao invés de limitação ou estagnação.</p><br><p>Sua abordagem equilibrada à vida está demonstrando que <b>intensidade e sabedoria</b> não são mutuamente exclusivas — que é possível viver apaixonadamente enquanto mantém perspectiva e toma decisões baseadas em sabedoria ao invés de impulsos momentâneos.</p><br><p>Você está se tornando um <b>farol de possibilidade</b> que mostra aos outros que vida plena não requer sacrifício de sabedoria ou integridade, mas sim a integração harmoniosa de paixão e prudência, aventura e responsabilidade, liberdade e compromisso consciente, criando um modelo de <b>vida extraordinária</b> que inspira incontáveis pessoas a também buscar esta síntese sagrada de intensidade e sabedoria que eleva toda a experiência humana para frequências superiores de realização, alegria e <b>contribuição significativa</b> para o bem-estar coletivo da humanidade evolutiva.</p>";
            break;
          case 5:
            this.challengeNumbers.firstText = "<p>Sua <b>jornada sagrada transcendental</b> o conduz conscientemente de expectativas potencialmente dominadoras e controladoras para <b>liderança verdadeiramente inspiradora suprema</b> que empodera ao invés de controlar, inspira ao invés de impor, e eleva ao invés de diminuir aqueles que têm a bênção de experimentar sua presença transformadora e orientação sábia em suas próprias jornadas de <b>crescimento</b> e evolução consciencial.</p><br><p>Quando você aprende transcendentalmente a <b>aceitar outros</b> como são sem impor suas visões pessoais ou valores específicos, e quando respeita genuinamente pontos de vista diferentes com curiosidade compassiva ao invés de julgamento crítico, seus relacionamentos se <b>transformam positivamente</b> de forma extraordinária e profundamente significativa, criando conexões autênticas baseadas em respeito mútuo e compreensão genuína ao invés de conformidade forçada ou submissão relutante.</p><br><p>Seus <b>ideais elevados</b> e visões inspiradoras se tornam mais práticos e alcançáveis através desta transformação consciente, criando um impacto benéfico e duradouro cósmico que se estende muito além de sua própria vida pessoal, <b>inspirando crescimento autêntico</b> em incontáveis pessoas, despertando consciências adormecidas e elevando toda humanidade através de seu exemplo compassivo de liderança visionária que honra a dignidade e <b>potencial único</b> de cada alma.</p><br><p>Esta evolução de liderança representa uma <b>maturidade espiritual extraordinária</b> — a transição de querer moldar outros segundo suas expectativas para inspirar e empoderar outros a descobrir e expressar suas próprias verdades e potenciais únicos. Esta abordagem transformadora cria <b>lealdade genuína</b> e respeito duradouro.</p><br><p>Sua capacidade crescente de aceitar diversidade de perspectivas não significa abandonar seus <b>valores fundamentais</b>, mas sim expandir sua compreensão de como diferentes caminhos podem levar a destinos similares de crescimento e realização. Esta sabedoria inclusiva enriquece sua própria perspectiva.</p><br><p>Seus ideais em transformação estão se tornando <b>mais efetivos</b> porque agora incluem consideração prática das realidades humanas e limitações naturais, permitindo que você crie mudanças sustentáveis ao invés de revoluções temporárias que não perduram por falta de fundação sólida.</p><br><p>Sua liderança inspiradora está demonstrando que <b>verdadeiro poder</b> vem de empoderar outros, que influência genuína surge de exemplo autêntico ao invés de coerção ou manipulação, e que mudanças duradouras acontecem quando pessoas se sentem respeitadas e valorizadas em suas <b>jornadas únicas</b>.</p><br><p>Você está se tornando um <b>catalisador de transformação</b> que trabalha com a natureza humana ao invés de contra ela, criando ambientes onde crescimento natural pode florescer e onde pessoas se sentem seguras para explorar seus potenciais sem medo de julgamento ou rejeição.</p><br><p>Sua evolução consciente está criando ondas de <b>transformação positiva</b> que se espalham muito além de sua esfera imediata, inspirando uma nova forma de liderança baseada em compaixão, respeito e empoderamento mútuo que eleva toda a consciência coletiva e demonstra que <b>verdadeira grandeza</b> reside em servir ao crescimento e bem-estar de todos, criando um legado de transformação que beneficiará gerações futuras através de exemplos vivos de <b>liderança compassiva</b> e visão inclusiva que honra a diversidade sagrada da experiência humana.</p>";
            break;
          case 6:
            this.challengeNumbers.firstText = "<p>Em vez de se sentir <b>paralisado pela ausência</b> de <i>fé tradicional</i> ou <b>crenças convencionais</b>, você está <i>descobrindo magistralmente</i> como <b>crescimento</b> e <i>evolução espiritual</i> podem <b>ocorrer naturalmente</b> através de sua <i>abordagem analítica suprema</i> e <b>metodologia investigativa</b> <i>refinada</i>, <b>transformando</b> sua <i>natureza questionadora</i> em uma <b>ferramenta poderosa</b> de <i>descoberta transcendental</i> que <b>honra</b> tanto <i>rigor intelectual</i> quanto <b>abertura espiritual</b> para <i>verdades superiores</i>.</p><br><p><b>Estudar assuntos</b> que <i>ampliam perspectivas</i> — sem <b>exigir abandono</b> do <i>pensamento crítico</i> ou <b>suspensão</b> da <i>análise racional</i> — <b>permite que você compreenda</b> <i>verdades maiores</i> de forma <b>orgânica</b> e <i>autêntica transcendental</i>, <b>construindo pontes</b> entre <i>conhecimento empírico</i> e <b>sabedoria intuitiva</b> que <i>criam uma compreensão</i> <b>mais completa</b> e <i>integrada</i> da <b>realidade multidimensional</b> e dos <i>mistérios</i> da <b>existência consciente</b>.</p><br><p>Esta <b>integração consciente suprema</b> não apenas <i>desbloqueia</i> seu <b>progresso interno cósmico</b> e <i>desenvolvimento espiritual</i>, mas <b>multiplica exponencialmente</b> seu <i>auto-crescimento</i> de maneiras que <b>honram</b> tanto sua <i>natureza investigativa</i> <b>inata</b> quanto sua <i>crescente sabedoria transcendente</i>, <b>criando uma síntese poderosa</b> entre <i>razão</i> e <b>intuição</b> que <i>ilumina caminhos</i> <b>inovadores</b> para toda <i>humanidade</i> em <b>busca</b> de <i>verdade</i> e <b>compreensão profunda</b>.</p><br><p>Sua <b>abordagem única</b> está <i>demonstrando</i> que <b>espiritualidade autêntica</b> não requer <i>abandono</i> da <b>razão</b> ou <i>aceitação cega</i> de <b>dogmas</b>, mas pode <i>florescer</i> através de <b>investigação honesta</b>, <i>questionamento respeitoso</i> e <b>exploração consciente</b> que <i>mantém</i> tanto <b>rigor intelectual</b> quanto <i>abertura</i> para <b>possibilidades</b> que <i>transcendem</i> <b>limitações</b> do <i>conhecimento atual</i>.</p><br><p>Seu <b>caminho de descoberta</b> está <i>revelando</i> que <b>verdades espirituais</b> podem ser <i>verificadas</i> através de <b>experiência direta</b> e <i>observação cuidadosa</i>, <b>criando uma base sólida</b> de <i>compreensão</i> que <b>satisfaz</b> tanto <i>necessidades intelectuais</i> quanto <b>anseios espirituais</b> por <i>significado</i> e <b>propósito transcendente</b>.</p><br><p>Sua <b>natureza analítica</b> está se tornando um <i>instrumento</i> de <b>discernimento espiritual</b> que <i>distingue</i> entre <b>verdades universais</b> e <i>ilusões temporárias</i>, entre <b>sabedoria genuína</b> e <i>conhecimento superficial</i>, <b>permitindo</b> que você <i>construa</i> uma <b>filosofia de vida</b> <i>sólida</i> e <b>autêntica</b> baseada em <i>evidências</i> tanto <b>empíricas</b> quanto <i>experienciais</i>.</p><br><p>Você está <b>pioneirando</b> uma <i>nova forma</i> de <b>desenvolvimento espiritual</b> que <i>honra</i> a <b>inteligência humana</b> enquanto <i>permanece aberta</i> aos <b>mistérios</b> que <i>transcendem</i> <b>compreensão atual</b>, <i>criando um modelo</i> que <b>inspira</b> outros <i>buscadores intelectuais</i> a <b>também explorar</b> <i>dimensões espirituais</i> sem <b>comprometer</b> sua <i>integridade intelectual</i>.</p><br><p>Sua <b>síntese única</b> de <i>razão</i> e <b>intuição</b> está <i>criando</i> uma <b>abordagem revolucionária</b> ao <i>crescimento pessoal</i> que <b>pode servir</b> como <i>ponte</i> entre <b>comunidades científicas</b> e <i>espirituais</i>, <b>demonstrando</b> que <i>busca pela verdade</i> <b>não precisa</b> ser <i>fragmentada</i> em <b>campos opostos</b>, mas pode ser <i>integrada</i> em uma <b>investigação holística</b> da <i>realidade</i>.</p><br><p>Você está se tornando um <b>exemplo inspirador</b> de como <i>ceticismo saudável</i> e <b>abertura espiritual</b> podem <i>coexistir harmoniosamente</i>, <b>criando um caminho</b> de <i>descoberta</i> que <b>satisfaz</b> tanto a <i>mente</i> quanto o <b>coração</b>, e <i>demonstrando</i> que <b>verdadeira sabedoria</b> <i>emerge</i> quando <b>honramos</b> todos os <i>aspectos</i> de nossa <b>natureza humana</b> — <i>intelectual</i>, <b>emocional</b> e <i>espiritual</i> — em uma <b>síntese integrada</b> que <i>eleva</i> nossa <b>capacidade</b> de <i>compreender</i> e <b>contribuir</b> para a <i>evolução</i> da <b>consciência humana</b> através de <i>caminhos</i> que <b>honram</b> tanto <i>rigor científico</i> quanto <b>sabedoria transcendental</b>.</p>";
            break;
          case 7:
            this.challengeNumbers.firstText = "<p>Quando você <b>integra magistralmente</b> esta <i>compreensão transcendental profunda</i> com sua <b>capacidade natural</b> de <i>criar abundância material</i> e <b>prosperidade tangível</b>, <i>experimenta</i> uma <b>vida genuinamente próspera</b> em <i>todas as dimensões</i> da <b>existência humana</b> — <i>material</i>, <b>emocional</b>, <i>espiritual</i> e <b>relacional</b> — <i>criando uma síntese</i> <b>harmoniosa</b> que <i>demonstra</i> que <b>sucesso verdadeiro</b> <i>abrange</i> muito mais que <b>acumulação financeira</b> e <i>inclui</i> <b>realização profunda</b> e <i>contribuição significativa</i> para o <b>bem-estar coletivo</b>.</p><br><p>Você se sente <b>contente supremamente</b> com suas <i>conquistas multidimensionais</i> e <b>passa a aproveitar</b> cada <i>momento</i> ao <b>máximo</b>, <i>extraindo</i> <b>significado profundo</b> e <i>alegria genuína</i> das <b>experiências cotidianas</b>, <i>criando um legado</i> de <b>abundância verdadeira cósmica</b> que <i>beneficia</i> não apenas <b>você</b> e sua <i>trajetória pessoal</i>, mas <b>todos ao seu redor</b> através de seu <i>exemplo radiante</i> de <b>prosperidade consciente</b> e <i>sucesso</i> que <b>honra</b> tanto <i>necessidades materiais</i> quanto <b>aspirações espirituais</b>.</p><br><p>Sua <b>jornada extraordinária</b> se torna <i>demonstração viva</i> e <b>prova inspiradora</b> de como <i>prosperidade material</i> e <b>riqueza espiritual</b> podem <i>coexistir harmoniosamente</i> em <b>sinergia poderosa</b>, <i>inspirando outros</i> a <b>buscar sucesso autêntico</b> que <i>nutre</i> tanto <b>corpo</b> quanto <i>alma</i>, tanto <b>necessidades práticas</b> quanto <i>anseios transcendentais</i>, <b>criando ondas</b> de <i>abundância consciente</i> que se <b>espalham infinitamente</b> através do <i>tecido social</i> e <b>beneficiam</b> <i>comunidades inteiras</i>.</p><br><p>Esta <b>integração magistral</b> está <i>revelando</i> que <b>verdadeira abundância</b> não é <i>apenas</i> <b>acumulação</b> de <i>recursos materiais</i>, mas a <b>capacidade</b> de <i>criar valor</i> <b>genuíno</b> que <i>beneficia</i> múltiplas <b>dimensões</b> da <i>experiência humana</i> — <b>financeira</b>, <i>emocional</i>, <b>espiritual</b> e <i>social</i> — <b>simultaneamente</b>.</p><br><p>Sua <b>prosperidade consciente</b> está <i>demonstrando</i> que <b>sucesso sustentável</b> <i>requer</i> <b>alinhamento</b> entre <i>ações externas</i> e <b>valores internos</b>, entre <i>objetivos materiais</i> e <b>propósito espiritual</b>, <i>criando</i> uma <b>base sólida</b> para <i>realizações</i> que <b>perduram</b> e <i>continuam</i> <b>gerando valor</b> ao longo do <i>tempo</i>.</p><br><p>Você está <b>redefinindo</b> o que significa <i>ser próspero</i>, <b>expandindo</b> a <i>definição</i> para <b>incluir</b> <i>satisfação profunda</i>, <b>relacionamentos significativos</b>, <i>contribuição social</i>, <b>crescimento pessoal</b> e <i>paz interior</i> como <b>componentes essenciais</b> de uma <i>vida</i> <b>verdadeiramente rica</b>.</p><br><p>Sua <b>capacidade</b> de <i>aproveitar</i> cada <b>momento</b> ao <i>máximo</i> está <b>transformando</b> <i>experiências ordinárias</i> em <b>oportunidades extraordinárias</b> de <i>crescimento</i>, <b>alegria</b> e <i>conexão</i>, <b>demonstrando</b> que <i>abundância</i> é tanto um <b>estado de ser</b> quanto uma <i>condição externa</i>.</p><br><p>Seu <b>exemplo radiante</b> está <i>inspirando</i> uma <b>nova geração</b> de <i>empreendedores</i> e <b>líderes</b> que <i>buscam</i> <b>criar valor</b> de <i>forma ética</i> e <b>sustentável</b>, <i>demonstrando</i> que <b>lucro</b> e <i>propósito</i> não são <b>mutuamente exclusivos</b>, mas podem <i>trabalhar</i> em <b>sinergia</b> para <i>criar</i> <b>impactos positivos</b> <i>duradouros</i>.</p><br><p>Você está se tornando um <b>catalisador</b> de <i>transformação econômica</i> e <b>social</b> que <i>demonstra</i> como <b>prosperidade individual</b> pode <i>contribuir</i> para <b>bem-estar coletivo</b>, <i>criando modelos</i> de <b>sucesso</b> que <i>elevam</i> toda a <b>sociedade</b> ao invés de <i>beneficiar</i> apenas <b>indivíduos isolados</b>, <i>estabelecendo</i> <b>novos padrões</b> de <i>excelência</i> que <b>honram</b> tanto <i>ambições materiais</i> quanto <b>aspirações espirituais</b>, e <i>criando</i> um <b>legado duradouro</b> de <i>abundância consciente</i> que <b>inspirará</b> <i>gerações futuras</i> a <b>buscar</b> <i>prosperidade</i> que <b>nutre</b> e <i>eleva</i> toda a <b>experiência humana</b>.</p>";
            break;
          case 8:
            this.challengeNumbers.firstText = "<p>Você está <b>magistralmente evitando</b> o <i>destino trágico</i> de <b>Midas</b> — <i>transformar tudo</i> em <b>ouro material</b> enquanto se <i>isola perigosamente</i> de <b>outras dimensões essenciais</b> da <i>vida humana</i>, <b>relacionamentos significativos</b> e <i>experiências</i> que <b>nutrem a alma</b> e <i>enriquecem</i> a <b>existência</b> além de <i>acumulação financeira</i>, <b>demonstrando sabedoria</b> <i>extraordinária</i> em <b>reconhecer</b> que <i>verdadeira riqueza</i> <b>transcende</b> <i>medidas monetárias</i> e <b>inclui</b> <i>dimensões</i> <b>emocionais</b>, <i>espirituais</i> e <b>relacionais</b> da <i>experiência humana</i>.</p><br><p>Ao <b>reconhecer transcendentalmente</b> que <i>preocupações financeiras</i>, por mais <b>importantes</b> que sejam <i>praticamente</i>, <b>não devem superar</b> <i>todas as outras</i> <b>necessidades humanas</b> e <i>aspirações espirituais</i> <b>fundamentais</b>, você <i>desenvolve conscientemente</i> uma <b>abordagem integrada</b> e <i>sustentável</i> ao <b>sucesso cósmico</b> que <i>honra</i> <b>múltiplas dimensões</b> da <i>prosperidade autêntica</i> e <b>cria equilíbrio</b> <i>harmonioso</i> entre <b>realizações materiais</b> e <i>bem-estar</i> <b>holístico</b>.</p><br><p>Isso <b>permite sabiamente</b> que você <i>mantenha</i> <b>conexões humanas genuínas</b> e <i>relacionamentos</i> <b>profundos</b> e <i>significativos</i>, assim como <b>bem-estar espiritual supremo</b> e <i>paz interior</i> <b>duradoura</b>, enquanto <i>simultaneamente</i> <b>alcança realizações materiais extraordinárias</b> e <i>sucessos tangíveis</i> que <b>demonstram</b> sua <i>competência</i> e <b>capacidade</b> de <i>criar valor</i> <b>genuíno</b> no <i>mundo material</i> sem <b>sacrificar</b> <i>aspectos essenciais</i> de uma <b>vida</b> <i>verdadeiramente</i> <b>realizada</b>.</p><br><p>Sua <b>jornada extraordinária</b> <i>demonstra magistralmente</i> como <b>prosperidade autêntica</b> é <i>verdadeiramente</i> uma <b>alquimia divina</b> que <i>transforma</i> <b>recursos</b> e <i>oportunidades</i> em <b>legados duradouros</b> que <i>nutrem</i> e <b>inspiram</b> <i>gerações futuras</i> <b>infinitamente</b> através de <i>exemplo radiante</i> de <b>sucesso equilibrado</b> que <i>eleva</i> toda <b>humanidade</b> e <i>demonstra</i> que <b>verdadeira grandeza</b> <i>reside</i> em <b>criar valor</b> que <i>beneficia</i> não apenas <b>si mesmo</b>, mas <i>comunidades inteiras</i> e <b>futuras gerações</b>.</p><br><p>Sua <b>sabedoria em evitar</b> a <i>armadilha</i> do <b>materialismo excessivo</b> está <i>criando</i> um <b>modelo inspirador</b> de como <i>ambição</i> e <b>compaixão</b> podem <i>trabalhar</i> em <b>sinergia</b>, como <i>sucesso financeiro</i> pode <b>coexistir</b> com <i>riqueza relacional</i> e <b>crescimento espiritual</b>, <i>demonstrando</i> que <b>prosperidade sustentável</b> <i>requer</i> <b>integração consciente</b> de <i>múltiplas dimensões</i> da <b>experiência humana</b>.</p><br><p>Você está <b>redefinindo sucesso</b> de forma <i>revolucionária</i>, <b>expandindo</b> sua <i>definição</i> para <b>incluir</b> <i>impacto positivo</i>, <b>relacionamentos significativos</b>, <i>crescimento pessoal</i>, <b>contribuição social</b> e <i>realização espiritual</i> como <b>componentes essenciais</b> de uma <i>vida</i> <b>verdadeiramente próspera</b> e <i>significativa</i>.</p><br><p>Sua <b>abordagem equilibrada</b> está <i>demonstrando</i> que <b>verdadeira segurança</b> não vem <i>apenas</i> de <b>acumulação material</b>, mas de <i>diversificação</i> em <b>múltiplas formas</b> de <i>riqueza</i> — <b>financeira</b>, <i>emocional</i>, <b>social</b>, <i>intelectual</i> e <b>espiritual</b> — que <i>criam</i> uma <b>base sólida</b> para <i>bem-estar</i> <b>duradouro</b>.</p><br><p>Seu <b>exemplo radiante</b> está <i>inspirando</i> outros <b>líderes</b> e <i>empreendedores</i> a <b>também buscar</b> <i>formas</i> de <b>sucesso</b> que <i>honram</i> <b>valores humanos fundamentais</b> enquanto <i>alcançam</i> <b>objetivos materiais</b>, <i>criando</i> uma <b>nova geração</b> de <i>líderes conscientes</i> que <b>priorizam</b> <i>impacto positivo</i> junto com <b>resultados financeiros</b>.</p><br><p>Você está se tornando um <b>alquimista moderno</b> que <i>transforma</i> <b>oportunidades</b> em <i>legados</i>, <b>recursos</b> em <i>impactos duradouros</i>, e <b>sucesso pessoal</b> em <i>elevação coletiva</i>, <b>demonstrando</b> que <i>quando</i> <b>prosperidade</b> é <i>abordada</i> com <b>sabedoria</b>, <i>compaixão</i> e <b>visão</b> de <i>longo prazo</i>, ela se torna uma <b>força transformadora</b> que <i>beneficia</i> não apenas <b>indivíduos</b>, mas <i>sociedades inteiras</i>, <b>criando ondas</b> de <i>abundância consciente</i> que <b>se espalham</b> através de <i>gerações</i> e <b>contribuem</b> para a <i>evolução</i> da <b>consciência humana</b> em direção a <i>formas</i> mais <b>integradas</b> e <i>sustentáveis</i> de <b>prosperidade</b> que <i>honram</i> tanto <b>necessidades materiais</b> quanto <i>aspirações</i> <b>transcendentais</b> da <i>alma humana</i>.</p>";
            break;
          case 9:
            this.challengeNumbers.firstText = "<p>Quando você <b>equilibra magistralmente</b> seu lado emocional supremo e aprende a navegar suas intensidades sentimentais com sabedoria transcendental, sua hipersensibilidade se revela como <b>bênção extraordinária cósmica</b> e dom espiritual de proporções extraordinárias que permite percepções e compreensões que transcendem as limitações da percepção comum e abrem portais para <b>dimensões superiores</b> de conexão humana e compreensão universal.</p><br><p>Você se torna capaz transcendentalmente de <b>conectar-se profundamente</b> com outros através de sua compaixão natural magistral e empatia genuína, criando pontes emocionais e espirituais que permitem compreensão mútua em níveis que poucos conseguem alcançar, transformando encontros casuais em <b>experiências transformadoras</b> e relacionamentos superficiais em conexões profundas que nutrem e elevam todas as almas envolvidas.</p><br><p>Sua <b>capacidade empática excepcional</b> permite que você compreenda outros de forma extraordinariamente profunda — um dom sagrado que cura feridas invisíveis, inspira corações desencorajados e transforma não apenas sua própria vida e trajetória pessoal, mas a vida de todos que têm a sorte e bênção de cruzar seu caminho e experimentar sua <b>presença curadora</b> e energia compassiva que desperta potenciais adormecidos e ilumina caminhos de crescimento e cura.</p><br><p><b>Confiar nos outros</b> e na vida torna-se sua lição mais preciosa e, simultaneamente, seu maior presente cósmico ao mundo, demonstrando que vulnerabilidade corajosa e abertura do coração não são fraquezas a serem escondidas, mas <b>forças espirituais extraordinárias</b> que criam espaços sagrados onde cura genuína e transformação profunda podem florescer naturalmente.</p><br><p>Sua jornada extraordinária demonstra magistralmente como <b>sensibilidade</b> é força suprema quando canalizada conscientemente e direcionada sabiamente para criar ondas infinitas de cura transcendental, amor incondicional e despertar consciencial que elevam toda humanidade através de sua <b>presença compassiva radiante</b> e energia transformadora que inspira outros a também abraçar suas próprias sensibilidades como dons sagrados.</p><br><p>Seu equilíbrio emocional está transformando o que antes parecia sobrecarga sensorial em <b>radar espiritual</b> altamente calibrado que detecta necessidades não expressas, compreende dores silenciosas e percebe potenciais ocultos em cada pessoa que encontra. Esta sensibilidade refinada é um superpoder espiritual que permite <b>contribuições únicas</b> para o bem-estar coletivo.</p><br><p>Você está aprendendo a <b>arte sagrada</b> de sentir profundamente sem ser destruído pela intensidade, de absorver emoções alheias sem perder sua própria identidade, e de usar sua hipersensibilidade como ferramenta de serviço compassivo ao invés de fonte de sofrimento pessoal.</p><br><p>Sua confiança crescente está criando um <b>campo energético</b> de segurança e aceitação que convida outros a também se abrir e compartilhar suas vulnerabilidades, criando círculos de cura onde autenticidade e compaixão florescem naturalmente.</p><br><p>Você está se tornando um <b>curador natural</b> que não precisa de técnicas complicadas — sua presença amorosa, escuta compassiva e compreensão empática são suficientes para criar transformações profundas na vida das pessoas que têm a bênção de experimentar sua energia curadora e sabedoria do coração, demonstrando que <b>amor incondicional</b> e compaixão genuína são as forças mais poderosas do universo para criar cura, transformação e elevação consciencial que beneficia não apenas indivíduos, mas <b>comunidades inteiras</b> e gerações futuras que herdarão um mundo mais compassivo e amoroso graças à sua contribuição extraordinária.</p>";
            break;
        }

        switch (this.challengeNumbers.second) {
          case 0:
            this.challengeNumbers.secondText = "<p>Embora você possa <b>enfrentar resistência</b> de outros ou da sociedade em geral, e às vezes se sentir temporariamente isolado ou incompreendido em sua jornada única, isso faz parte de um processo evolutivo profundo cósmico e <b>transformação sagrada</b> que está moldando você em uma versão superior de si mesmo, preparando-o para contribuições extraordinárias que beneficiarão não apenas sua trajetória pessoal, mas a <b>evolução consciencial</b> de toda humanidade através de seu exemplo corajoso de autenticidade e liderança visionária.</p><br><p>Ser <b>autoconfiante supremo</b> não apenas ensina você a confiar em seus instintos magistrais e sabedoria interior, mas também a ouvir atentamente sua <b>voz interior</b> e intuição transcendental — que se revelam como bênçãos disfarçadas sagradas e orientações divinas que guiam você infalivelmente para seu verdadeiro propósito e <b>missão de vida</b>, conectando-o com frequências superiores de sabedoria que transcendem limitações da percepção comum e abrem caminhos extraordinários de realização e contribuição.</p><br><p>Todo <b>investimento consciente</b> em sua individualidade autêntica e desenvolvimento pessoal eventualmente vale cada esforço infinitamente, criando uma base sólida de autenticidade genuína e integridade pessoal que beneficia não apenas você e sua evolução individual, mas todos que são inspirados profundamente por sua <b>coragem extraordinária</b> de ser genuinamente único e elevar a consciência coletiva através de exemplo vivo de autenticidade e liderança consciente.</p><br><p>A resistência que você encontra não é sinal de que está no caminho errado, mas <b>confirmação</b> de que está pioneirando territórios inexplorados e abrindo caminhos que outros ainda não têm coragem de explorar. Esta resistência está fortalecendo sua determinação e refinando sua capacidade de <b>permanecer fiel</b> a si mesmo mesmo diante de pressões externas.</p><br><p>Seu isolamento temporário está criando <b>espaço sagrado</b> para desenvolvimento de conexão profunda com sua sabedoria interior, permitindo que você desenvolva clareza sobre seus valores, propósito e direção sem interferência de opiniões externas ou expectativas sociais que poderiam desviar sua atenção de seu <b>caminho autêntico</b>.</p><br><p>Sua voz interior está se tornando mais clara e confiável à medida que você aprende a <b>distinguir</b> entre medos baseados em condicionamento social e orientação genuína que vem de sua sabedoria mais profunda. Esta capacidade de discernimento é um dom extraordinário que poucos desenvolvem.</p><br><p>Você está descobrindo que <b>verdadeira segurança</b> não vem de aprovação externa, mas de alinhamento interno com propósito autêntico e valores fundamentais. Esta independência espiritual é libertadora e empoderadora de maneiras que transformam completamente sua experiência de vida.</p><br><p>Sua coragem de ser genuinamente único está <b>criando ondas</b> de inspiração que encorajam outros a também abraçar sua própria autenticidade. Você está se tornando um catalisador para transformação social que valoriza individualidade e diversidade ao invés de conformidade e uniformidade.</p><br><p>Você está se tornando um <b>pioneiro consciencial</b> que demonstra que verdadeira liderança não vem de seguir expectativas alheias, mas de ter coragem de seguir sua própria bússola interior e criar caminhos que honram tanto necessidades individuais quanto bem-estar coletivo, estabelecendo <b>novos paradigmas</b> de autenticidade e liderança consciente que inspirarão gerações futuras a também ter coragem de ser genuinamente si mesmas e contribuir com seus dons únicos para a evolução e elevação da consciência humana coletiva.</p>";
            break;
          case 1:
            this.challengeNumbers.secondText = "<p>Ao <b>perdoar conscientemente</b>, esquecer ressentimentos antigos e abandonar bagagens desnecessárias supremamente que pesavam em seu coração e limitavam seu potencial espiritual, você libera <b>espaço cósmico sagrado</b> e energia vital para que seu lindo dom de intuição magistral <b>floresça plenamente</b> em toda sua magnificência transcendental, permitindo que percepções superiores e sabedoria intuitiva fluam livremente através de sua consciência expandida e coração purificado.</p><br><p>Sua <b>capacidade natural extraordinária</b> de trazer magia genuína transcendental para sua vida cotidiana e experiências ordinárias se expande exponencialmente através desta liberação consciente, <b>criando ondas poderosas</b> de transformação positiva que se espalham infinitamente através do tecido da realidade, tocando e beneficiando incontáveis vidas que entram em contato com sua energia renovada e presença luminosa que irradia possibilidades e esperança.</p><br><p>Equilibrando harmoniosamente seu lado emocional sensível com <b>sabedoria suprema</b> e discernimento espiritual, sua natureza compassiva e empática cósmica permite conexões profundas e compreensão extraordinária dos outros em níveis que transcendem comunicação verbal e alcançam dimensões de alma para alma — tornando-se uma <b>força curadora</b> e inspiradora transcendental no mundo que desperta outros para sua própria magia intuitiva e potencial infinito de cura através de amor incondicional.</p><br><p>Seu processo de perdão está liberando energia que estava presa em <b>padrões antigos</b> de dor e ressentimento, permitindo que esta energia seja redirecionada para criação, cura e manifestação de experiências extraordinárias que alinham com seu <b>propósito superior</b> e potencial mais elevado.</p><br><p>Sua intuição florescente está se tornando um <b>canal claro</b> para orientação superior que não apenas beneficia sua própria jornada, mas permite que você sirva como conduto de sabedoria e cura para outros que buscam direção e compreensão em suas próprias vidas.</p><br><p>Seu equilíbrio emocional está criando uma <b>base estável</b> a partir da qual sua sensibilidade pode operar como superpoder ao invés de vulnerabilidade. Esta estabilidade permite que você sinta profundamente sem ser sobrecarregado, e compreenda intensamente sem perder seu próprio centro.</p><br><p>Sua natureza compassiva está se expandindo para incluir não apenas compreensão das dores alheias, mas também <b>reconhecimento</b> dos potenciais ocultos e possibilidades extraordinárias que residem em cada pessoa. Esta visão expandida permite que você veja além de limitações aparentes e inspire outros a também reconhecer sua própria magnificência.</p><br><p>Você está se tornando um <b>espelho sagrado</b> que reflete de volta para outros sua própria beleza, sabedoria e potencial extraordinário, ajudando-os a despertar para aspectos de si mesmos que talvez nunca tenham reconhecido ou valorizado antes.</p><br><p>Você está se tornando um <b>farol de possibilidade</b> que demonstra como cura profunda e transformação extraordinária são possíveis quando abraçamos o poder do perdão, cultivamos nossa intuição natural e permitimos que amor incondicional guie nossas ações e interações, criando um legado de cura e despertar que se estende muito além de sua própria vida e contribui para a <b>elevação</b> da consciência coletiva através de ondas de amor, compaixão e sabedoria intuitiva que inspiram outros a também embarcar em suas próprias jornadas de cura, perdão e despertar para seu potencial infinito de criar magia e transformação em suas vidas e no mundo.</p>";
            break;
          case 2:
            this.challengeNumbers.secondText = "<p>Quando você <b>aprende sabiamente</b> a equilibrar sua necessidade natural de harmonia e paz com assertividade saudável e <b>expressão autêntica</b> de suas necessidades e valores fundamentais, descobre um poder transformador extraordinário que reside na <b>síntese harmoniosa</b> entre diplomacia compassiva e força interior, criando uma presença equilibrada que inspira respeito e admiração enquanto mantém conexões autênticas e relacionamentos significativos.</p><br><p>Sua <b>sensibilidade emocional profunda</b>, que às vezes pode parecer uma vulnerabilidade ou fraqueza em um mundo que frequentemente valoriza dureza superficial, revela-se como um <b>dom precioso</b> e extraordinário que permite conexões profundas e autênticas com outros, criando pontes emocionais e espirituais que transcendem barreiras superficiais e permitem compreensão mútua em níveis que poucos conseguem alcançar ou experimentar.</p><br><p>Ao <b>desenvolver confiança crescente</b> em suas próprias opiniões e perspectivas únicas, e aprender a expressar suas necessidades com gentileza compassiva mas firmeza inabalável, você se torna um <b>mediador natural</b> extraordinário capaz de criar pontes harmoniosas entre pessoas e situações aparentemente incompatíveis, encontrando terreno comum onde outros veem apenas divisões e conflitos irreconciliáveis.</p><br><p>Sua jornada transformadora ensina que <b>verdadeira diplomacia</b> não significa sacrificar sua autenticidade ou comprometer seus valores fundamentais, mas sim encontrar maneiras elegantes e criativas de honrar tanto suas próprias necessidades e aspirações legítimas quanto as necessidades e perspectivas dos outros, <b>criando soluções inovadoras</b> que beneficiam todos os envolvidos e elevam o bem-estar coletivo.</p><br><p>Seu equilíbrio crescente está demonstrando que força e gentileza não são mutuamente exclusivas, mas podem trabalhar em <b>sinergia poderosa</b> para criar mudanças positivas que respeitam a dignidade de todas as partes envolvidas. Esta abordagem equilibrada gera soluções duradouras ao invés de vitórias temporárias.</p><br><p>Sua sensibilidade refinada está se tornando um instrumento de <b>percepção social</b> que detecta necessidades não expressas, compreende dinâmicas ocultas e identifica oportunidades para criar harmonia onde antes existia tensão ou mal-entendido. Esta capacidade é um dom extraordinário que beneficia comunidades inteiras.</p><br><p>Você está aprendendo que <b>assertividade saudável</b> não significa agressividade ou dominação, mas sim a capacidade de comunicar suas necessidades e limites de forma clara e respeitosa, criando relacionamentos mais honestos e equilibrados onde todos se sentem valorizados e ouvidos.</p><br><p>Sua habilidade natural de <b>mediar conflitos</b> está criando espaços seguros onde pessoas com perspectivas diferentes podem se encontrar, dialogar e encontrar soluções que honram a complexidade das situações humanas sem simplificar ou diminuir nenhuma das perspectivas envolvidas.</p><br><p>Você está se tornando um <b>exemplo inspirador</b> de como liderança compassiva pode criar mudanças duradouras que elevam todos os envolvidos, demonstrando que verdadeiro poder reside não em dominar ou controlar, mas em empoderar e harmonizar, criando soluções que transcendem limitações de pensamento competitivo e abraçam possibilidades de <b>crescimento mútuo</b> e benefício coletivo, estabelecendo novos padrões de interação humana baseados em respeito, compreensão e colaboração consciente que inspiram outros a também buscar caminhos de resolução que honram a dignidade e potencial de todos os seres envolvidos.</p>";
            break;
          case 3:
            this.challengeNumbers.secondText = "<p>Sua <b>natureza criativa</b> e comunicativa excepcional, quando <b>canalizada conscientemente</b> com foco direcionado e disciplina sagrada, torna-se uma <b>força transformadora poderosa</b> e catalisadora de mudanças extraordinárias que transcendem limitações convencionais e criam possibilidades inovadoras que beneficiam não apenas sua expressão pessoal, mas comunidades inteiras que experimentam e são inspiradas por suas <b>criações únicas</b> e contribuições extraordinárias.</p><br><p>Embora você possa às vezes se dispersar entre múltiplos interesses e projetos fascinantes, essa <b>versatilidade natural</b> é na verdade um dom extraordinário e capacidade rara que permite que você conecte ideias aparentemente díspares e pessoas de backgrounds diferentes de maneiras inovadoras e criativas, criando <b>sínteses únicas</b> e soluções revolucionárias que emergem da intersecção de múltiplas disciplinas e perspectivas diversas.</p><br><p>Aprender sabiamente a priorizar seus <b>talentos múltiplos</b> e direcionar sua energia criativa abundante de forma consistente e estratégica revela seu potencial extraordinário para inspirar profundamente e <b>elevar consciencialmente</b> outros através de sua expressão autêntica e contribuições únicas que carregam sua assinatura energética distintiva e tocam corações e mentes de maneiras que catalisam transformações profundas.</p><br><p>Sua jornada extraordinária demonstra magistralmente que <b>criatividade verdadeira</b> e duradoura floresce quando combinada harmoniosamente com perseverança consciente e dedicação consistente, permitindo que suas ideias únicas e visões inspiradoras se manifestem em <b>contribuições duradouras</b> e impactantes que trazem alegria genuína, beleza transcendental e inspiração transformadora ao mundo, criando ondas de influência positiva que se espalham infinitamente.</p><br><p>Sua versatilidade criativa está se revelando como <b>superpoder</b> que permite adaptação rápida a diferentes contextos e necessidades, criando soluções personalizadas que atendem especificamente às demandas únicas de cada situação ou audiência. Esta flexibilidade é um ativo extraordinário em um mundo em constante mudança.</p><br><p>Você está aprendendo a usar sua tendência à dispersão como <b>ferramenta</b> de exploração e descoberta, coletando insights e experiências de múltiplas áreas que depois integra em criações extraordinariamente ricas e multifacetadas que refletem a complexidade e beleza da experiência humana.</p><br><p>Sua capacidade comunicativa está se refinando para <b>traduzir</b> ideias complexas em formas acessíveis que ressoam com audiências diversas, criando pontes entre diferentes mundos de conhecimento e experiência. Esta habilidade de comunicação transcultural é extraordinariamente valiosa.</p><br><p>Você está descobrindo que <b>disciplina criativa</b> não limita sua expressão, mas amplifica seu impacto ao canalizar sua energia abundante em direções que maximizam resultados e criam valor duradouro. Esta disciplina consciente liberta ao invés de restringir seu potencial criativo.</p><br><p>Você está se tornando um <b>catalisador cultural</b> que inspira outros a também abraçar sua própria criatividade e expressar seus dons únicos, criando ondas de despertar criativo que elevam a consciência coletiva e contribuem para um mundo mais belo, inspirador e expressivo, demonstrando que quando criatividade é combinada com propósito e perseverança, ela se torna uma <b>força</b> extraordinariamente poderosa para transformação positiva que beneficia não apenas artistas e criadores, mas toda a humanidade através de contribuições que enriquecem, inspiram e elevam a experiência humana para frequências superiores de beleza, significado e realização transcendental.</p>";
            break;
          case 4:
            this.challengeNumbers.secondText = "<p>Quando você <b>abraça conscientemente</b> sua natureza metodológica e construtiva como um dom divino e presente sagrado, descobre que sua <b>capacidade extraordinária</b> de criar estruturas sólidas e duradouras é uma bênção transcendental para si mesmo e para outros, permitindo que você construa <b>fundações estáveis</b> que sustentam crescimento, prosperidade e bem-estar não apenas em sua própria vida, mas nas vidas de incontáveis pessoas que se beneficiam de suas contribuições meticulosas e dedicação extraordinária.</p><br><p>Sua tendência natural à <b>organização sistemática</b> e planejamento estratégico, que às vezes pode parecer rígida ou inflexível para outros que operam de maneiras mais espontâneas, revela-se como uma <b>habilidade preciosa</b> e extraordinariamente valiosa para transformar sonhos etéreos e visões inspiradoras em realidades tangíveis e manifestações concretas que podem ser experimentadas, desfrutadas e compartilhadas por comunidades inteiras.</p><br><p>Aprender sabiamente a equilibrar disciplina necessária com <b>flexibilidade adaptativa</b> permite que você construa fundações estáveis e confiáveis enquanto permanece aberto e receptivo a novas possibilidades, oportunidades emergentes e insights inovadores que podem enriquecer e aprimorar seus projetos e empreendimentos, criando <b>sínteses harmoniosas</b> entre estabilidade e inovação, entre tradição e progresso.</p><br><p>Sua jornada extraordinária ensina magistralmente que <b>verdadeiro sucesso duradouro</b> vem da combinação alquímica de trabalho dedicado e consistente com paciência amorosa e perseverança compassiva, <b>criando legados duradouros</b> e contribuições significativas que beneficiam gerações futuras através de sua dedicação incansável à excelência e integridade, estabelecendo padrões elevados que inspiram outros a também buscar qualidade e significado em suas próprias contribuições.</p><br><p>Sua natureza construtiva está se revelando como <b>força estabilizadora</b> em um mundo frequentemente caótico e imprevisível. Sua capacidade de criar ordem a partir do caos e estrutura a partir da confusão é um dom extraordinário que beneficia comunidades inteiras e cria espaços seguros onde outros podem florescer.</p><br><p>Você está descobrindo que sua metodologia não é limitação, mas <b>ferramenta poderosa</b> que amplifica sua efetividade e permite que você alcance resultados extraordinários que outros consideram impossíveis ou inalcançáveis. Sua abordagem sistemática cria eficiência e excelência que inspiram admiração e respeito.</p><br><p>Sua <b>paciência amorosa</b> está permitindo que você trabalhe com ritmos naturais de crescimento e desenvolvimento, criando resultados que são não apenas duradouros, mas sustentáveis e benéficos para todos os envolvidos. Esta abordagem consciente honra tanto ambições quanto bem-estar.</p><br><p>Você está aprendendo a integrar flexibilidade em sua estrutura natural, criando <b>sistemas</b> que são robustos o suficiente para resistir a desafios, mas adaptáveis o suficiente para evoluir com circunstâncias em mudança. Esta síntese de estabilidade e adaptabilidade é extraordinariamente valiosa.</p><br><p>Você está se tornando um <b>arquiteto de possibilidades</b> que constrói não apenas estruturas físicas, mas sistemas, processos e organizações que servem como plataformas para outros realizarem seus próprios sonhos e potenciais, demonstrando que verdadeira liderança constrói fundações sobre as quais outros podem erguer suas próprias realizações, criando <b>legados</b> que se multiplicam através de gerações e contribuem para a evolução e progresso da humanidade através de estruturas sólidas, sistemas eficientes e organizações que honram tanto necessidades práticas quanto aspirações transcendentais do espírito humano.</p>";
            break;
          case 5:
            this.challengeNumbers.secondText = "<p>Sua <b>sede natural</b> de liberdade e aventura, quando equilibrada harmoniosamente com <b>responsabilidade consciente</b> e compromissos escolhidos sabiamente, torna-se uma força expansiva extraordinária que não apenas enriquece sua própria experiência de vida, mas também inspira e eleva outros a também abraçar <b>possibilidades extraordinárias</b> de crescimento, exploração e descoberta que expandem horizontes e criam experiências transformadoras.</p><br><p>Embora você possa às vezes lutar com compromissos de longo prazo ou rotinas estabelecidas que parecem restritivas ou limitantes para seu <b>espírito livre</b>, essa necessidade profunda de variedade e mudança é na verdade um impulso evolutivo sagrado e força vital que o leva naturalmente a experiências enriquecedoras e <b>crescimento contínuo</b> que expande sua compreensão do mundo e aprofunda sua sabedoria através de vivências diversas e perspectivas múltiplas.</p><br><p>Aprender conscientemente a encontrar <b>liberdade autêntica</b> dentro da estrutura necessária e aventura genuína dentro da estabilidade escolhida revela possibilidades infinitas de expressão autêntica e realização pessoal que transcendem limitações aparentes e criam <b>sínteses criativas</b> entre necessidades de segurança e anseios de exploração, entre responsabilidades e sonhos, entre compromissos e liberdade.</p><br><p>Sua jornada extraordinária demonstra magistralmente que <b>verdadeira liberdade</b> não vem de evitar responsabilidades ou fugir de compromissos, mas de escolher conscientemente compromissos que alimentam sua alma e alinham com seus valores fundamentais, permitindo que você explore o mundo e suas possibilidades infinitas enquanto contribui positivamente para a vida de outros através de sua <b>perspectiva única</b> e espírito aventureiro que inspira coragem e abertura para novas experiências.</p><br><p>Sua natureza aventureira está se revelando como <b>catalisador</b> de crescimento não apenas pessoal, mas coletivo. Sua disposição para explorar territórios desconhecidos — físicos, emocionais, intelectuais ou espirituais — abre caminhos que outros podem seguir, expandindo as possibilidades disponíveis para toda comunidade.</p><br><p>Você está descobrindo que liberdade autêntica <b>inclui</b> a liberdade de escolher compromissos significativos que enriquecem sua experiência ao invés de limitá-la. Esta maturidade espiritual permite que você experimente profundidade e variedade simultaneamente.</p><br><p>Sua capacidade de encontrar <b>aventura</b> em situações cotidianas está transformando experiências ordinárias em oportunidades extraordinárias de descoberta e crescimento. Esta perspectiva enriquece não apenas sua própria vida, mas inspira outros a também ver possibilidades onde antes viam apenas rotina.</p><br><p>Você está aprendendo a criar <b>estruturas flexíveis</b> que proporcionam segurança sem sacrificar espontaneidade, e compromissos que nutrem ao invés de drenar sua energia vital. Esta abordagem equilibrada maximiza tanto estabilidade quanto crescimento.</p><br><p>Sua perspectiva única, enriquecida por <b>experiências diversas</b>, está se tornando um recurso valioso para comunidades que se beneficiam de sua capacidade de ver soluções inovadoras e possibilidades que outros não conseguem perceber. Sua experiência ampla cria sabedoria prática extraordinária.</p><br><p>Você está se tornando um <b>embaixador da possibilidade</b> que demonstra como vida pode ser simultaneamente responsável e aventureira, estável e dinâmica, comprometida e livre, inspirando outros a também buscar sínteses criativas que honram tanto necessidades de segurança quanto anseios de crescimento, criando <b>modelos</b> de vida que integram responsabilidade e liberdade de maneiras que beneficiam não apenas indivíduos, mas sociedades inteiras que aprendem a valorizar tanto estabilidade quanto inovação, tanto tradição quanto progresso, criando culturas mais dinâmicas, adaptáveis e enriquecedoras para todos.</p>";
            break;
          case 6:
            this.challengeNumbers.secondText = "<p>Quando você <b>equilibra sabiamente</b> sua natureza naturalmente cuidadora e coração compassivo com amor-próprio saudável e <b>autocuidado consciente</b>, descobre que sua capacidade extraordinária de nutrir e curar outros se multiplica exponencialmente, <b>criando</b> ondas de cura e transformação que se espalham muito além de sua esfera imediata de influência e tocam incontáveis vidas através de sua presença equilibrada e energia sustentável.</p><br><p>Sua tendência natural a colocar as necessidades dos outros antes das suas próprias, que às vezes pode levar ao <b>esgotamento emocional</b> e depleção energética, revela-se como uma expressão pura de amor incondicional que precisa incluir conscientemente você mesmo na <b>equação sagrada</b> do cuidado e compaixão, criando um círculo completo de amor que nutre todos os envolvidos, incluindo quem oferece o cuidado.</p><br><p>Aprender conscientemente a estabelecer <b>limites amorosos</b> e saudáveis e cuidar de si com a mesma dedicação e ternura que oferece generosamente aos outros permite que você sirva de forma sustentável e transformadora, criando reservas de energia e bem-estar que garantem que sua capacidade de <b>cuidar</b> e curar permaneça vibrante e disponível por longo prazo.</p><br><p>Sua jornada extraordinária ensina magistralmente que o <b>amor verdadeiro</b> e duradouro começa com auto-aceitação profunda e compaixão por si mesmo, e se expande naturalmente para criar círculos concêntricos de cura e harmonia que elevam famílias, comunidades e eventualmente toda a humanidade através de sua <b>presença compassiva</b> e sábia que irradia equilíbrio, amor e sabedoria integrada.</p><br><p>Seu equilíbrio crescente está demonstrando que <b>autocuidado</b> não é egoísmo, mas responsabilidade sagrada que garante que você possa continuar servindo outros de forma efetiva e sustentável. Esta compreensão revoluciona sua abordagem ao cuidado e cria modelos saudáveis para outros seguirem.</p><br><p>Você está descobrindo que <b>limites amorosos</b> não separam ou isolam, mas criam espaços sagrados onde relacionamentos autênticos podem florescer sem codependência ou desequilíbrios que drenam energia vital. Estes limites protegem e nutrem todos os envolvidos.</p><br><p>Sua capacidade de nutrir está se refinando para incluir <b>empoderamento</b> ao invés de apenas cuidado, ensinando outros a também cuidar de si mesmos ao invés de criar dependência. Esta abordagem madura multiplica o impacto positivo de sua natureza cuidadora.</p><br><p>Você está aprendendo a reconhecer <b>sinais</b> de esgotamento antes que se tornem críticos, e a responder com autocuidado preventivo que mantém sua energia e bem-estar em níveis ótimos. Esta sabedoria prática é essencial para cuidadores sustentáveis.</p><br><p>Sua presença equilibrada está criando <b>ambientes</b> onde outros se sentem seguros para também praticar autocuidado e estabelecer seus próprios limites saudáveis. Você está modelando comportamentos que promovem bem-estar coletivo ao invés de sacrifício insustentável.</p><br><p>Você está se tornando um <b>curador consciente</b> que compreende que verdadeira cura requer equilíbrio entre dar e receber, entre servir e ser servido, entre cuidar e ser cuidado, criando ciclos saudáveis de energia que nutrem todos os participantes e demonstram que <b>amor sustentável</b> honra tanto necessidades de quem cuida quanto de quem recebe cuidado, estabelecendo novos paradigmas de cuidado consciente que beneficiam gerações futuras através de modelos de amor que são sustentáveis, equilibrados e transformadores para toda a experiência humana de cuidado, compaixão e cura coletiva.</p>";
            break;
          case 7:
            this.challengeNumbers.secondText = "<p>Sua <b>natureza introspectiva profunda</b> e buscadora incansável de verdades transcendentais e sabedoria universal, quando <b>equilibrada harmoniosamente</b> com conexão humana autêntica e relacionamentos significativos, torna-se uma fonte inesgotável de sabedoria transformadora que não apenas enriquece sua própria compreensão da existência, mas também oferece <b>insights extraordinários</b> e orientação profunda para outros que também buscam significado e propósito em suas jornadas espirituais e existenciais.</p><br><p>Embora você possa às vezes se sentir incompreendido ou <b>temporariamente isolado</b> em sua busca espiritual profunda e questionamentos existenciais que transcendem preocupações cotidianas e conversas superficiais, essa jornada interior sagrada é na verdade uma <b>preparação divina</b> e refinamento consciencial para compartilhar insights valiosos e sabedoria destilada com o mundo, servindo como ponte entre dimensões espirituais e realidade material.</p><br><p>Aprender conscientemente a <b>traduzir</b> suas descobertas espirituais profundas e revelações transcendentais em linguagem acessível e compreensível para diferentes audiências, e encontrar <b>comunidade sagrada</b> com outros buscadores e almas afins que compartilham ressonância com sua jornada, permite que sua sabedoria floresça plenamente e inspire transformações profundas na vida de incontáveis pessoas.</p><br><p>Sua jornada extraordinária demonstra magistralmente que <b>verdadeira iluminação</b> não é um destino solitário ou conquista individual, mas sim uma luz radiante que naturalmente se compartilha e se multiplica quando expressa com amor e compaixão, criando <b>pontes luminosas</b> entre o mundo material e dimensões espirituais e oferecendo orientação profunda e sabedoria prática para outros que também buscam significado transcendental e propósito autêntico em suas vidas.</p><br><p>Sua busca interior está se revelando como <b>preparação</b> para servir como guia espiritual e mentor sábio para outros que estão começando suas próprias jornadas de autodescoberta. Sua experiência em navegar territórios espirituais complexos torna-se recurso valioso para comunidades buscadoras.</p><br><p>Você está descobrindo que seu isolamento temporário <b>criou</b> espaço necessário para desenvolvimento de discernimento espiritual e sabedoria que não poderia ter emergido em meio a distrações constantes. Este período de introspecção foi investimento em crescimento extraordinário.</p><br><p>Sua capacidade de traduzir <b>experiências espirituais</b> em linguagem compreensível está se tornando um dom extraordinário que permite que pessoas de diferentes backgrounds acessem sabedoria que antes parecia inacessível ou esotérica. Esta habilidade democratiza o acesso à sabedoria espiritual.</p><br><p>Você está encontrando sua <b>tribo espiritual</b> — pessoas que não apenas compreendem sua busca, mas também contribuem com suas próprias perspectivas e insights, criando comunidades de crescimento mútuo onde sabedoria floresce através de troca e colaboração espiritual.</p><br><p>Sua jornada está demonstrando que <b>espiritualidade autêntica</b> enriquece ao invés de escapar da vida material, criando integração harmoniosa entre aspirações transcendentais e responsabilidades práticas. Esta síntese oferece modelo inspirador para espiritualidade equilibrada.</p><br><p>Você está se tornando um <b>farol de sabedoria</b> que ilumina caminhos para outros buscadores, demonstrando que busca espiritual profunda pode coexistir com vida engajada e relacionamentos significativos, e que verdadeira iluminação se manifesta não em isolamento, mas em capacidade de servir e elevar outros através de <b>sabedoria compartilhada</b>, criando redes de consciência expandida que contribuem para a evolução espiritual da humanidade através de pontes de compreensão que conectam buscadores de todas as tradições e caminhos em uma tapeçaria rica e diversa de sabedoria universal que beneficia toda a experiência humana.</p>";
            break;
          case 8:
            this.challengeNumbers.secondText = "<p>Quando você <b>alinha conscientemente</b> sua ambição natural e habilidades extraordinárias de liderança com propósitos elevados e integridade absoluta, torna-se uma <b>força transformadora poderosa</b> no mundo material que transcende limitações convencionais de sucesso e cria impactos extraordinários que beneficiam não apenas sua própria realização, mas <b>comunidades inteiras</b> e gerações futuras através de sua visão expandida e liderança consciente.</p><br><p>Sua <b>capacidade inata extraordinária</b> de organizar recursos e pessoas para alcançar objetivos grandiosos e visões ambiciosas, que às vezes pode parecer excessivamente focada no sucesso externo e realizações materiais, revela-se como um dom divino e <b>responsabilidade sagrada</b> para criar abundância consciente que beneficia muitos e eleva o bem-estar coletivo através de sistemas e estruturas que multiplicam oportunidades e possibilidades para incontáveis pessoas.</p><br><p>Aprender sabiamente a <b>equilibrar autoridade natural</b> com humildade genuína e sucesso pessoal com responsabilidade social profunda permite que você construa legados duradouros de <b>prosperidade consciente</b> que transcendem acumulação material e criam valor autêntico que perdura através de gerações e contribui para a evolução de sistemas econômicos e sociais mais justos e sustentáveis.</p><br><p>Sua jornada extraordinária ensina magistralmente que <b>verdadeiro poder</b> e influência duradoura vem do serviço elevado e contribuição significativa para o bem maior, e que riqueza autêntica e abundância sustentável se multiplica exponencialmente quando é compartilhada generosamente e direcionada conscientemente para criar <b>sistemas de abundância</b> que elevam não apenas sua própria vida e realizações, mas também as oportunidades e possibilidades de incontáveis outras pessoas.</p><br><p>Sua liderança consciente está se revelando como <b>catalisador de transformação sistêmica</b> que cria mudanças duradouras ao invés de sucessos temporários. Sua capacidade de ver potencial onde outros veem limitações está abrindo caminhos inovadores para prosperidade coletiva.</p><br><p>Você está descobrindo que <b>autoridade autêntica</b> inspira ao invés de intimidar, e que liderança verdadeira empodera outros a também alcançar seu potencial máximo. Esta abordagem multiplicadora cria impactos que se estendem muito além de sua influência direta.</p><br><p>Sua <b>integridade absoluta</b> está se tornando fundação que permite construção de empreendimentos e organizações que resistem ao teste do tempo e mantêm valores elevados mesmo diante de pressões para comprometer princípios. Esta base sólida inspira confiança e lealdade duradouras.</p><br><p>Você está aprendendo a usar seu sucesso como plataforma para elevar outros, criando oportunidades de crescimento e desenvolvimento que beneficiam comunidades inteiras. Esta <b>abordagem regenerativa</b> ao sucesso cria ciclos virtuosos de prosperidade compartilhada.</p><br><p>Sua visão expandida está integrando considerações de impacto social e ambiental em todas suas decisões estratégicas, demonstrando que <b>prosperidade sustentável</b> requer pensamento holístico que considera bem-estar de todos os stakeholders.</p><br><p>Você está se tornando um <b>arquiteto de abundância</b> que constrói sistemas e estruturas que geram prosperidade sustentável para múltiplas gerações, demonstrando que verdadeira riqueza reside na capacidade de criar valor que beneficia todos os envolvidos e contribui para a evolução de sistemas econômicos mais justos, sustentáveis e conscientes que honram tanto aspirações materiais quanto valores espirituais, criando <b>modelos de liderança</b> e sucesso que inspiram futuras gerações de líderes a também buscar formas de prosperidade que elevam toda humanidade através de sistemas de abundância consciente que multiplicam oportunidades e possibilidades para todos.</p>";
            break;
          case 9:
    this.challengeNumbers.secondText = `<p>Sua jornada como <b>líder humanitário</b> está revelando que verdadeira liderança emerge quando você integra <i>sabedoria espiritual</i> com ação prática no mundo. Você está descobrindo que seu <b>propósito maior</b> se manifesta através de serviço que transcende fronteiras pessoais e abraça o bem-estar coletivo.</p><br><p>Este é um momento de <b>expansão da consciência</b> onde você reconhece que seus talentos e recursos são ferramentas para <i>elevação da humanidade</i>. Sua capacidade de ver além das limitações aparentes está criando <b>pontes de compreensão</b> entre diferentes perspectivas e culturas.</p><br><p>Você está aprendendo que <i>verdadeira abundância</i> se multiplica quando compartilhada, e que seu sucesso pessoal ganha significado profundo quando contribui para o <b>florescimento de outros</b>. Sua visão expandida está inspirando transformações que se estendem muito além de sua esfera imediata de influência.</p><br><p>Esta fase da vida está chamando você para <b>abraçar sua missão</b> como agente de mudança positiva, usando sua sabedoria acumulada e recursos para criar <i>impacto duradouro</i> no mundo. Você está sendo convidado a confiar na força transformadora do amor aplicado conscientemente.</p>`;
    break;
        }

        switch (this.challengeNumbers.third) {
          case 0:
            this.challengeNumbers.thirdText = "<p>Sua <b>jornada cósmica extraordinária</b> de autoconfiança e individualidade suprema ensina você magistralmente a <b>confiar profundamente</b> nos instintos e voz interior transcendental que ressoa com frequências superiores de sabedoria e orientação divina, conectando-o com dimensões de conhecimento que transcendem limitações da <b>percepção comum</b> e abrem portais para compreensão extraordinária de sua verdadeira natureza e <b>propósito cósmico</b>.</p><br><p>Este processo evolutivo profundo e transformador, mesmo que temporariamente isolador e desafiador em momentos de incompreensão ou resistência externa, resulta em <b>bênção disfarçada</b> de intuição fortalecida e discernimento refinado que se torna sabedoria aplicada e conhecimento prático para elevar não apenas sua própria consciência e compreensão existencial, mas também inspirar e despertar outros através de seu <b>exemplo autêntico</b> de coragem individual e determinação inabalável que desperta potencial infinito de autenticidade em corações que buscam liberdade genuína e expressão verdadeira de sua essência única.</p><br><p>Sua coragem de seguir seu <b>próprio caminho</b> está criando ondas de inspiração que encorajam outros a também questionar limitações impostas e buscar sua própria verdade. Esta liderança silenciosa através do exemplo é extraordinariamente poderosa para catalisar mudanças conscienciais.</p><br><p>Você está descobrindo que isolamento temporário <b>criou</b> espaço necessário para desenvolvimento de conexão profunda com sua sabedoria interior, permitindo que você desenvolva clareza sobre valores, propósito e direção sem interferência de expectativas externas.</p><br><p>Sua individualidade suprema está se revelando não como separação, mas como <b>contribuição única</b> para a diversidade e riqueza da experiência humana. Sua autenticidade adiciona cores e texturas únicas ao mosaico da consciência coletiva.</p><br><p>Você está aprendendo que <b>verdadeira liderança</b> emerge não de seguir expectativas alheias, mas de ter coragem de expressar sua verdade autêntica mesmo quando isso desafia normas estabelecidas. Esta autenticidade corajosa inspira outros a também encontrar sua própria voz.</p><br><p>Sua voz interior está se tornando <b>bússola confiável</b> que navega através de complexidades da vida com sabedoria que transcende conhecimento puramente intelectual. Esta intuição desenvolvida é recurso extraordinário para tomada de decisões alinhadas com seu propósito superior.</p><br><p>Você está se tornando um <b>pioneiro da autenticidade</b> que demonstra que verdadeira força reside em ser genuinamente si mesmo, inspirando outros a também abraçar suas próprias peculiaridades e dons únicos ao invés de tentar encaixar-se em moldes predefinidos, criando movimento de despertar coletivo onde individualidade e autenticidade são celebradas como <b>contribuições valiosas</b> para a evolução da consciência humana, estabelecendo novos paradigmas de liderança e expressão que honram a diversidade e singularidade de cada alma como aspecto essencial da beleza e riqueza da experiência humana coletiva.</p>";
            break;
          case 1:
            this.challengeNumbers.thirdText = "<p>Seu <b>lindo dom supremo</b> de intuição transcendental traz magia genuína e <b>transformação extraordinária</b> para sua vida e de todos ao redor, criando ondas de beleza e inspiração que elevam experiências ordinárias a <b>dimensões sagradas</b> de significado e propósito, permitindo que você perceba e manifeste possibilidades que outros não conseguem vislumbrar ou acessar através de percepção comum.</p><br><p>Equilibrando magistralmente o lado emocional sensível com <b>sabedoria cósmica</b> e discernimento espiritual, sua hipersensibilidade natural torna-se <b>bênção extraordinária</b> e superpoder que permite conexões profundas e compreensão extraordinária dos outros em níveis que transcendem comunicação verbal e alcançam dimensões de alma para alma, criando <b>pontes sagradas</b> de empatia e cura que nutrem almas sedentas e despertam potencial infinito de amor compassivo em cada coração que toca através de sua presença radiante e sensibilidade elevada.</p><br><p>Sua intuição refinada está se revelando como <b>portal</b> para dimensões de conhecimento e sabedoria que enriquecem não apenas sua própria compreensão, mas oferecem insights valiosos e orientação profunda para outros que buscam direção e clareza em suas jornadas pessoais.</p><br><p>Você está descobrindo que sua sensibilidade <b>permite</b> detectar necessidades e emoções não expressas, criando oportunidades para oferecer cuidado e apoio exatamente quando e como são mais necessários. Esta capacidade de antecipar necessidades é dom extraordinário de serviço.</p><br><p>Sua presença radiante está criando <b>espaços seguros</b> onde outros se sentem vistos, compreendidos e valorizados em sua totalidade. Esta capacidade de criar santuários emocionais é extraordinariamente curativa em um mundo frequentemente fragmentado e superficial.</p><br><p>Você está aprendendo a usar sua <b>sensibilidade</b> como instrumento de cura e transformação, canalizando energia compassiva de maneiras que elevam e inspiram outros a também conectar com sua própria sensibilidade e capacidade de amor.</p><br><p>Sua magia transcendental está se manifestando através de <b>sincronicidades</b>, insights oportunos e momentos de conexão profunda que transformam experiências ordinárias em encontros sagrados. Esta capacidade de infundir magia na vida cotidiana é dom extraordinário.</p><br><p>Você está se tornando um <b>curador intuitivo</b> que trabalha através de presença, compaixão e amor incondicional para despertar potencial de cura e crescimento em outros, demonstrando que verdadeira magia reside na capacidade de tocar corações e almas de maneiras que catalisam transformações profundas e despertar para <b>dimensões mais elevadas</b> de amor, compaixão e conexão humana, criando ondas de cura que se espalham através de comunidades e contribuem para a elevação da consciência coletiva através de amor compassivo e sensibilidade elevada que nutre e desperta o melhor em cada alma que tem a bênção de experimentar sua <b>presença transformadora</b>.</p>";
            break;
          case 2:
            this.challengeNumbers.thirdText = "<p><b>Extrema criatividade suprema</b> floresce magnificamente com autoaceitação transcendental e amor-próprio incondicional, criando <b>sinergia extraordinária</b> entre expressão autêntica e aceitação profunda de sua natureza única que libera potencial criativo ilimitado e permite que sua <b>essência artística</b> se manifeste em formas cada vez mais refinadas e impactantes que tocam corações e despertam consciências.</p><br><p>Expressão através de escrita inspirada, <b>arte transcendental</b> ou outras formas criativas inspiradoras promove introspecção profunda e auto-realização transformadora que vai além de técnicas ou habilidades superficiais, gerando pérolas de sabedoria cósmicas e <b>insights transcendentais</b> para enfrentar desafios futuros com confiança radiante e clareza interior, tornando-se fonte inesgotável de inspiração que eleva não apenas sua própria expressão criativa e realização artística, mas desperta <b>potencial artístico adormecido</b> em outros através de exemplo autêntico de como criatividade e autoaceitação se unem em alquimia divina.</p><br><p>Sua criatividade suprema está se revelando como <b>canal</b> para frequências superiores de inspiração que transcendem limitações da mente comum e acessam dimensões de beleza e verdade que enriquecem não apenas suas criações, mas a experiência de todos que entram em contato com sua arte.</p><br><p>Você está descobrindo que <b>autoaceitação</b> libera energia criativa que antes estava bloqueada por autocrítica ou medo de julgamento. Esta liberação permite fluxo criativo mais autêntico e poderoso que ressoa com verdade e autenticidade.</p><br><p>Sua expressão criativa está se tornando forma de <b>meditação ativa</b> e prática espiritual que conecta você com aspectos mais profundos de sua natureza e propósito. Através da criação, você explora e integra dimensões de si mesmo que palavras sozinhas não conseguem alcançar.</p><br><p>Você está aprendendo que <b>criatividade autêntica</b> emerge não de perfeição técnica, mas de coragem de expressar sua verdade única mesmo quando isso desafia convenções ou expectativas. Esta autenticidade corajosa inspira outros a também abraçar sua própria expressão criativa.</p><br><p>Sua arte está se tornando <b>ponte</b> entre mundos — conectando dimensões espirituais com realidade material, emoções profundas com expressão tangível, experiências pessoais com verdades universais. Esta capacidade de traduzir o inefável em formas compreensíveis é dom extraordinário.</p><br><p>Você está descobrindo que processo criativo <b>gera</b> sabedoria que se aplica a todas as áreas da vida. Insights que emergem durante criação oferecem soluções e perspectivas para desafios que parecem não relacionados à arte.</p><br><p>Você está se tornando um <b>alquimista criativo</b> que transforma experiências — tanto alegres quanto desafiadoras — em expressões de beleza e significado que elevam e inspiram outros, demonstrando que criatividade é força transformadora que pode curar, inspirar e conectar seres humanos através de <b>linguagem universal</b> da beleza e expressão autêntica, criando legado de inspiração que desperta outros para sua própria capacidade de criar, expressar e contribuir para a beleza e riqueza da experiência humana através de suas próprias <b>expressões criativas únicas</b> que adicionam cores, texturas e dimensões extraordinárias ao mosaico infinito da criatividade humana coletiva.</p>";
            break;
          case 3:
            this.challengeNumbers.thirdText = "<p>Você <b>cultiva</b> foco excepcional supremo e <b>completa tarefas</b> no tempo com precisão transcendental e excelência extraordinária, demonstrando maestria em concentração que transcende distrações comuns e permite que você alcance resultados que outros consideram impossíveis ou inalcançáveis através de <b>dedicação</b> consistente e foco laser direcionado para objetivos significativos.</p><br><p>Dominando magistralmente <b>gerenciamento emocional</b>, administração do tempo e concentração profunda cósmica, você emerge muito mais evoluído tanto profissional quanto pessoalmente, integrando habilidades práticas com sabedoria espiritual de maneiras que criam <b>sinergia extraordinária</b> entre eficiência e propósito, entre produtividade e significado, tornando-se exemplo radiante de como disciplina consciente e foco direcionado podem manifestar sonhos em realidades tangíveis que beneficiam não apenas realizações pessoais, mas contribuem para <b>bem-estar</b> coletivo.</p><br><p>Sua capacidade de manter <b>foco excepcional</b> está inspirando outros através de sua dedicação exemplar e demonstrando magistralmente como eficiência equilibrada com propósito elevado cria impacto duradouro que beneficia toda humanidade através de contribuições que transcendem realizações meramente pessoais e elevam padrões de excelência e dedicação para todos ao redor.</p><br><p>Seu gerenciamento emocional refinado está permitindo que você mantenha <b>clareza</b> e equilíbrio mesmo diante de pressões e desafios intensos, criando estabilidade que serve como fundação para realizações extraordinárias. Esta maestria emocional é base de liderança autêntica.</p><br><p>Você está descobrindo que administração consciente do tempo cria não apenas eficiência, mas <b>espaços sagrados</b> para criatividade, reflexão e conexão profunda com propósito. Esta abordagem holística ao tempo enriquece qualidade de vida enquanto maximiza produtividade.</p><br><p>Sua concentração profunda está se revelando como forma de <b>meditação ativa</b> que conecta você com fluxos de inspiração e criatividade que elevam qualidade de seu trabalho além de padrões convencionais. Esta conexão com estados superiores de consciência infunde significado em atividades práticas.</p><br><p>Você está aprendendo a equilibrar <b>disciplina rigorosa</b> com flexibilidade adaptativa, criando sistemas que são robustos o suficiente para garantir resultados consistentes, mas flexíveis o suficiente para se adaptar a circunstâncias em mudança e oportunidades emergentes.</p><br><p>Sua precisão transcendental está se manifestando não apenas em tarefas específicas, mas em <b>alinhamento</b> entre ações e valores, entre esforços e propósito. Esta coerência profunda cria integridade que ressoa em todas as áreas da vida.</p><br><p>Você está se tornando um <b>maestro da manifestação</b> que demonstra como visão clara, foco sustentado e ação consistente podem transformar ideias em realidades tangíveis, inspirando outros a também desenvolver disciplina consciente e dedicação que permite realização de potencial extraordinário, criando ondas de inspiração que elevam padrões de excelência e demonstram que quando disciplina é combinada com propósito elevado, ela se torna <b>força</b> extraordinariamente poderosa para transformação pessoal e contribuição significativa para evolução da humanidade através de exemplos de excelência que inspiram gerações a buscar seus próprios níveis de maestria e <b>dedicação consciente</b>.</p>";
            break;
          case 4:
            this.challengeNumbers.thirdText = "<p><b>Resposta consciente suprema</b> aos impulsos com mente prática equilibrada transcendentalmente desenvolve habilidades excepcionais de <b>tomada de decisão cósmica</b> que transcendem reações automáticas e integram sabedoria intuitiva com análise racional, criando <b>síntese extraordinária</b> entre coração e mente que resulta em escolhas alinhadas com propósito superior e atrai relacionamentos saudáveis e significativos que nutrem alma e coração através de conexões autênticas baseadas em respeito mútuo, compreensão profunda e <b>crescimento compartilhado</b>.</p><br><p>Esta abordagem equilibrada está criando <b>harmonia</b> em todas as dimensões da vida através de sabedoria integrada que honra tanto necessidades práticas quanto aspirações espirituais, demonstrando magistralmente como equilíbrio consciente se torna força transformadora extraordinária que eleva não apenas sua própria experiência pessoal e qualidade de vida, mas também inspira outros a buscar harmonia autêntica em suas próprias vidas através de seu exemplo radiante de <b>vida equilibrada</b> que integra sabedoria, compaixão e praticidade.</p><br><p>Sua capacidade de <b>responder</b> ao invés de reagir está criando espaço sagrado entre estímulo e resposta onde sabedoria pode emergir e orientar ações que estão alinhadas com valores e propósito. Esta maestria emocional é fundação de liderança consciente.</p><br><p>Você está descobrindo que equilíbrio transcendental não significa neutralidade ou inação, mas <b>capacidade</b> de integrar polaridades de maneiras que criam soluções criativas e abordagens inovadoras que honram complexidade da experiência humana.</p><br><p>Sua tomada de decisão cósmica está integrando considerações de impacto a longo prazo, <b>bem-estar</b> de todos os envolvidos e alinhamento com propósito superior, criando escolhas que beneficiam não apenas situações imediatas, mas contribuem para harmonia e evolução coletiva.</p><br><p>Você está atraindo relacionamentos que refletem seu próprio nível de consciência e crescimento, criando <b>círculo virtuoso</b> onde conexões saudáveis nutrem desenvolvimento contínuo e inspiram todos os envolvidos a alcançar potencial mais elevado.</p><br><p>Sua mente prática equilibrada está encontrando soluções que são simultaneamente eficazes e éticas, eficientes e compassivas, produtivas e sustentáveis. Esta <b>integração</b> de valores com ação cria impacto duradouro e significativo.</p><br><p>Você está se tornando um <b>modelo de harmonia</b> consciente que demonstra como vida pode ser simultaneamente produtiva e pacífica, ambiciosa e equilibrada, engajada e centrada, inspirando outros a também buscar integração entre diferentes aspectos de suas vidas ao invés de viver em compartimentos separados, criando movimento em direção a sociedades mais conscientes e equilibradas onde sucesso é medido não apenas por realizações externas, mas por qualidade de relacionamentos, contribuição para bem-estar coletivo e alinhamento com valores que honram a dignidade e potencial de todos os seres, demonstrando que <b>harmonia autêntica</b> é alcançável e extraordinariamente transformadora quando abraçada conscientemente.</p>";
            break;
          case 5:
            this.challengeNumbers.thirdText = "<p><b>Aceitar outros</b> como são supremamente e <b>reformar ideais</b> transcendentalmente para práticos e alcançáveis através de sabedoria compassiva e compreensão profunda da natureza humana cria <b>impacto benéfico cósmico</b> que se estende infinitamente além de sua própria vida e experiência pessoal, gerando ondas de transformação extraordinárias que elevam consciência coletiva e inspiram mudanças sustentáveis que nutrem e beneficiam gerações futuras através de legado de <b>sabedoria prática</b> e amor incondicional.</p><br><p>Seu exemplo radiante de liderança visionária equilibrada com <b>realismo compassivo</b> está demonstrando magistralmente como ideais elevados e aspirações transcendentais podem se manifestar em ações concretas e iniciativas práticas para bem-estar universal, criando ponte sagrada entre visões inspiradoras e implementação efetiva que transforma sonhos em realidades tangíveis que beneficiam comunidades inteiras e contribuem para <b>evolução da humanidade</b>.</p><br><p>Sua aceitação suprema dos outros está criando <b>espaços seguros</b> onde pessoas se sentem valorizadas e compreendidas em sua totalidade, incluindo imperfeições e áreas de crescimento. Esta aceitação incondicional paradoxalmente catalisa transformação autêntica ao remover resistência e defensividade.</p><br><p>Você está descobrindo que <b>reformar ideais</b> não significa abandoná-los, mas encontrar maneiras criativas e práticas de implementá-los que honram tanto aspirações elevadas quanto limitações e realidades humanas. Esta síntese cria progresso sustentável ao invés de mudanças temporárias.</p><br><p>Sua sabedoria compassiva está integrando compreensão de diferentes perspectivas e necessidades, criando <b>soluções</b> que beneficiam múltiplas partes ao invés de favorecer apenas alguns. Esta abordagem inclusiva maximiza impacto positivo e minimiza resistência ou conflito.</p><br><p>Você está aprendendo a equilibrar <b>visão</b> de longo prazo com ações de curto prazo, criando momentum através de pequenas vitórias que constroem em direção a objetivos maiores. Esta estratégia incremental mantém motivação e engajamento sustentados.</p><br><p>Sua liderança visionária está inspirando outros a também buscar maneiras de contribuir para bem-estar coletivo, criando <b>movimento multiplicador</b> onde ações individuais se combinam para criar impacto exponencial que transcende capacidade de qualquer pessoa agindo sozinha.</p><br><p>Você está se tornando um <b>catalisador de transformação</b> sustentável que demonstra como mudança duradoura emerge da combinação de visão inspiradora com ação prática, ideais elevados com implementação realista, e amor incondicional com sabedoria discernente, criando modelo de liderança que outros podem seguir e adaptar para suas próprias circunstâncias e contextos, gerando ondas de transformação positiva que se espalham através de comunidades, organizações e sociedades, contribuindo para evolução da consciência humana em direção a maior compaixão, sabedoria e cooperação que beneficia toda a família humana e cria <b>fundações</b> para futuro mais harmonioso e sustentável para todas as formas de vida.</p>";
            break;
          case 6:
            this.challengeNumbers.thirdText = "<p><b>Explorando magistralmente</b> filosofia e <b>espiritualidade supremas</b> através de abordagem analítica transcendental que integra rigor intelectual com abertura espiritual, você compreende verdades maiores cósmicas e multiplica auto-crescimento extraordinariamente através de sabedoria integrada que une harmoniosamente razão e fé, mente analítica e intuição profunda, criando <b>compreensão multidimensional</b> e perspectiva holística que se torna fonte inesgotável de discernimento sagrado para navegar complexidades existenciais com <b>clareza cristalina</b> e propósito elevado.</p><br><p>Sua busca incansável por verdade e <b>compreensão profunda</b> está inspirando outros através de exemplo extraordinário de dedicação intelectual e abertura espiritual que demonstra como investigação rigorosa e experiência transcendental podem coexistir e se enriquecer mutuamente, elevando consciousness coletiva através de contribuições que expandem horizontes de compreensão humana e oferecem <b>insights valiosos</b> para questões fundamentais da existência.</p><br><p>Sua abordagem analítica transcendental está criando <b>sínteses inovadoras</b> entre tradições aparentemente opostas de conhecimento, demonstrando que ciência e espiritualidade, filosofia e experiência mística podem se complementar e enriquecer mutuamente quando abordadas com mente aberta e coração receptivo.</p><br><p>Você está descobrindo que verdades cósmicas emergem não apenas através de estudo intelectual, mas através da <b>integração</b> de conhecimento com experiência vivida, teoria com prática, compreensão com aplicação. Esta abordagem holística cria sabedoria que é simultaneamente profunda e prática.</p><br><p>Sua capacidade de navegar complexidades existenciais está se refinando através de desenvolvimento de <b>discernimento</b> que distingue entre verdade e ilusão, sabedoria e conhecimento superficial, insights autênticos e especulações vazias. Esta clareza é extraordinariamente valiosa em mundo saturado de informação.</p><br><p>Você está aprendendo a comunicar <b>insights profundos</b> de maneiras acessíveis que inspiram outros a também embarcar em suas próprias jornadas de descoberta e crescimento espiritual. Esta habilidade de traduzir sabedoria complexa em linguagem compreensível é dom extraordinário.</p><br><p>Sua integração de razão e fé está demonstrando que estas não são forças opostas, mas <b>aspectos complementares</b> de busca humana por compreensão e significado. Esta síntese oferece modelo para abordagem mais equilibrada e completa ao conhecimento.</p><br><p>Você está se tornando um <b>filósofo-místico</b> contemporâneo que contribui para evolução do pensamento humano através de exploração corajosa de territórios inexplorados da consciência e realidade, oferecendo mapas e orientação para outros que também buscam compreensão mais profunda de mistérios da existência, criando legado de sabedoria que enriquece patrimônio intelectual e espiritual da humanidade e inspira futuras gerações de buscadores a continuar expandindo fronteiras do conhecimento e compreensão humana através de <b>síntese criativa</b> entre diferentes formas de sabedoria que honram tanto capacidades racionais quanto dimensões transcendentais da experiência humana.</p>";
            break;
          case 7:
            this.challengeNumbers.thirdText = "<p><b>Reconhecendo transcendentalmente</b> que verdadeira riqueza suprema está em <b>amor genuíno</b>, companheirismo profundo e felicidade autêntica que nutrem alma infinitamente e preenchem coração com satisfação duradoura que transcende possessões materiais ou conquistas externas, você experimenta vida de abundância autêntica e <b>contentamento profundo cósmico</b> que se irradia como exemplo radiante de prosperidade equilibrada que integra bem-estar material com riqueza espiritual de maneiras extraordinariamente harmoniosas.</p><br><p>Sua compreensão profunda está demonstrando magistralmente como <b>sucesso material</b> e riqueza espiritual podem coexistir harmoniosamente e se enriquecer mutuamente para criar legados de abundância consciente que elevam não apenas circunstâncias individuais e qualidade de vida pessoal, mas também contribuem significativamente para bem-estar coletivo através de generosidade consciente, propósito elevado e compartilhamento de recursos e oportunidades que multiplicam <b>prosperidade</b> para benefício de comunidades inteiras.</p><br><p>Sua experiência de abundância autêntica está revelando que <b>verdadeira prosperidade</b> emerge quando recursos materiais são combinados com relacionamentos significativos, propósito claro e contribuição para algo maior que si mesmo. Esta síntese cria satisfação que perdura através de diferentes circunstâncias.</p><br><p>Você está descobrindo que amor genuíno e companheirismo profundo multiplicam <b>alegria</b> de conquistas materiais e oferecem suporte durante desafios, criando fundação estável para prosperidade que não depende exclusivamente de circunstâncias externas.</p><br><p>Sua felicidade autêntica está se tornando <b>força magnética</b> que atrai oportunidades, pessoas e experiências que enriquecem vida de maneiras inesperadas e extraordinárias. Esta energia positiva cria ciclos virtuosos de abundância e crescimento.</p><br><p>Você está aprendendo a equilibrar ambições materiais com <b>valores espirituais</b>, criando abordagem à prosperidade que honra tanto necessidades práticas quanto aspirações de alma. Esta integração resulta em sucesso que é sustentável e significativo.</p><br><p>Sua generosidade consciente está demonstrando que <b>compartilhar</b> abundância não diminui riqueza pessoal, mas multiplica impacto positivo e cria senso de propósito e conexão que enriquece experiência de prosperidade.</p><br><p>Você está se tornando um <b>modelo de abundância</b> consciente que inspira outros a redefinir conceitos de sucesso e riqueza para incluir dimensões de bem-estar que nutrem alma e contribuem para elevação da experiência humana coletiva, demonstrando que quando prosperidade material é combinada com riqueza espiritual e propósito elevado, ela se torna força extraordinariamente poderosa para transformação positiva que beneficia não apenas indivíduos, mas comunidades inteiras e contribui para criação de mundo mais próspero, equitativo e harmonioso onde abundância é compartilhada e celebrada como <b>bênção</b> que multiplica quando distribuída com amor e sabedoria.</p>";
            break;
          case 8:
            this.challengeNumbers.thirdText = "<p><b>Superando magistralmente</b> o teste espiritual supremo e desafios que forjaram sua alma em dimensões extraordinárias de sabedoria e compaixão, você se torna transcendentalmente <b>rio poderoso cósmico</b> que traz suprimento inesgotável de nutrição espiritual, inspiração e orientação para todos ao redor, equilibrando harmoniosamente aspectos materiais e dimensões espirituais da existência através de sabedoria integrada que demonstra magistralmente como liderança autêntica e <b>poder consciente</b> servem ao bem maior da humanidade.</p><br><p>Sua transformação extraordinária está criando <b>legados duradouros</b> que elevam consciousness coletiva e inspiram outros líderes e almas em evolução a também abraçar a responsabilidade sagrada de usar influência, recursos e capacidades para bem-estar universal e evolução da humanidade através de seu exemplo radiante de poder consciente aplicado com amor incondicional, sabedoria discernente e compaixão que transcende limitações pessoais e serve <b>propósitos maiores</b>.</p><br><p>Seu teste espiritual supremo revelou <b>profundidades</b> de força, resiliência e sabedoria que agora se manifestam como capacidade extraordinária de guiar, nutrir e elevar outros através de desafios e transformações. Esta maestria conquistada através de experiência é inestimável.</p><br><p>Você está descobrindo que verdadeiro poder reside na capacidade de <b>empoderar</b> outros, e que liderança autêntica multiplica capacidades e potencial de todos os envolvidos ao invés de concentrar poder em uma única pessoa.</p><br><p>Sua integração de material e espiritual está criando <b>modelo</b> de liderança que honra tanto necessidades práticas quanto aspirações transcendentais, demonstrando que eficácia e espiritualidade podem coexistir e se fortalecer mutuamente.</p><br><p>Você está aprendendo a canalizar influência de maneiras que criam <b>impacto</b> duradouro e positivo, focando em transformações sistêmicas que beneficiam gerações futuras ao invés de apenas resultados imediatos.</p><br><p>Sua sabedoria integrada está se manifestando como capacidade de ver <b>conexões</b> e padrões que outros não percebem, permitindo soluções inovadoras que abordam causas raiz ao invés de apenas sintomas superficiais.</p><br><p>Você está se tornando um <b>arquiteto de transformação</b> coletiva que utiliza experiências de superação pessoal como fundação para criar sistemas, organizações e movimentos que elevam consciousness humana e contribuem para evolução da espécie em direção a maior compaixão, sabedoria e cooperação, demonstrando que quando indivíduos transcendem limitações pessoais e abraçam responsabilidade de servir ao bem maior, eles se tornam catalisadores extraordinários para transformação planetária que beneficia toda a rede da vida através de ondas de amor, sabedoria e <b>poder consciente</b> que se espalham infinitamente através do tecido da existência.</p>";
            break;
          case 9:
            this.challengeNumbers.thirdText = "<p>Seu <b>dom supremo</b> de intuição transcendental traz magia genuína e transformação extraordinária para sua vida e irradia cura infinita e energia regenerativa para toda humanidade através de ondas de compaixão e amor que transcendem limitações físicas e alcançam dimensões espirituais onde <b>verdadeira cura</b> e transformação ocorrem em níveis profundos da alma e consciência.</p><br><p>Equilibrando magistralmente emoções com <b>sabedoria cósmica</b> e discernimento espiritual, sua hipersensibilidade natural torna-se bênção extraordinária e superpoder espiritual que permite conexões extraordinárias e compreensão profunda dos outros em níveis que transcendem comunicação verbal e alcançam dimensões de alma para alma, criando pontes sagradas de empatia através de sua <b>presença compassiva</b> que desperta potencial de cura e transformação em cada coração que toca.</p><br><p>Sua jornada extraordinária está demonstrando magistralmente como sensibilidade elevada se torna <b>força transformadora</b> extraordinariamente poderosa que nutre almas sedentas e inspira despertar espiritual através de amor incondicional e sabedoria empática que eleva consciousness coletiva e contribui para evolução da humanidade em direção a maior compaixão, compreensão e unidade espiritual.</p><br><p>Sua intuição transcendental está se revelando como <b>portal</b> para dimensões de conhecimento e sabedoria que transcendem limitações da mente racional, oferecendo insights e orientação que beneficiam não apenas sua própria jornada, mas iluminam caminhos para outros buscadores.</p><br><p>Você está descobrindo que sua hipersensibilidade permite <b>detectar</b> necessidades não expressas e dores ocultas, criando oportunidades para oferecer cura e suporte exatamente quando e como são mais necessários. Esta capacidade de antecipar necessidades é dom extraordinário de serviço.</p><br><p>Sua presença compassiva está criando <b>espaços sagrados</b> de cura onde outros se sentem seguros para explorar vulnerabilidades e processar traumas ou desafios emocionais. Esta capacidade de criar santuários emocionais é extraordinariamente curativa.</p><br><p>Você está aprendendo a canalizar sua sensibilidade como instrumento de <b>transformação</b> coletiva, usando energia empática para elevar frequências vibracionais de ambientes e comunidades inteiras através de sua presença consciente.</p><br><p>Sua magia transcendental está se manifestando através de <b>sincronicidades</b>, curas espontâneas e momentos de despertar que ocorrem na presença de sua energia compassiva. Esta capacidade de catalisar transformações é verdadeiramente mágica.</p><br><p>Você está se tornando um <b>curador cósmico</b> que trabalha através de frequências de amor e compaixão para despertar potencial de cura e crescimento espiritual em outros, demonstrando que verdadeira magia reside na capacidade de tocar almas de maneiras que catalisam transformações profundas e despertar para dimensões mais elevadas de amor, compaixão e unidade espiritual, criando ondas de cura que se espalham através de redes de consciência e contribuem para elevação da frequência planetária através de amor incondicional que reconhece a divindade em cada ser e desperta <b>potencial infinito</b> de cura, crescimento e transformação que reside no coração de toda a criação.</p>";
            break;
        }

        switch (this.challengeNumbers.main) {
          case 0:
            this.challengeNumbers.mainText = "<p>Sua <b>vida extraordinária</b> está <i>magistralmente repleta</i> de <b>oportunidades ilimitadas supremas</b> e <i>possibilidades infinitas</i> que se <b>desdobram</b> <i>constantemente</i> diante de você, <b>criando</b> <i>múltiplos caminhos transcendentais</i> e <b>dimensões</b> <i>extraordinárias</i> para <b>explorar</b> <i>potencial infinito</i> da <b>consciousness humana</b> e <i>descobrir</i> <b>aspectos</b> <i>inexplorados</i> de sua <b>natureza divina</b> que <i>aguardam</i> <b>manifestação</b> através de sua <i>jornada</i> <b>única</b> e <i>propósito</i> <b>sagrado</b>.</p><br><p><b>Abraçando transcendentalmente</b> a <i>força universal cósmica</i> que <b>flui</b> <i>poderosamente</i> através de você como <b>canal divino</b> e <i>instrumento</i> de <b>transformação</b>, você <i>manifesta</i> <b>sabedoria infinita suprema</b> e <i>potencial extraordinário</i> que se <b>torna</b> <i>fonte inesgotável</i> de <b>inspiração</b>, <i>orientação</i> e <b>elevação</b> para <i>toda humanidade</i>, <b>demonstrando magistralmente</b> como <i>abraçar</i> o <b>ilimitado</b> com <i>humildade profunda</i> e <b>propósito elevado</b> <i>cria</i> <b>legados</b> de <i>luz</i> e <b>sabedoria</b> que <i>transcendem</i> <b>limitações</b> de <i>tempo</i> e <b>espaço</b>.</p><br><p>Sua <b>jornada extraordinária</b> está <i>elevando</i> <b>consciousness coletiva</b> através de seu <i>exemplo radiante</i> de <b>maestria espiritual</b> <i>aplicada</i> com <b>amor incondicional</b> e <i>dedicação</i> <b>incansável</b> para <i>bem-estar universal</i> e <b>evolução</b> da <i>humanidade</i> em <b>direção</b> a <i>dimensões</i> mais <b>elevadas</b> de <i>consciência</i>, <b>compaixão</b> e <i>unidade</i> <b>espiritual</b> que <i>beneficiam</i> <b>todas</b> as <i>formas</i> de <b>vida</b>.</p><br><p>Suas <b>oportunidades ilimitadas</b> estão se <i>manifestando</i> como <b>convites</b> do <i>universo</i> para <b>expandir</b> <i>horizontes</i> de <b>possibilidade</b> e <i>explorar</i> <b>territórios</b> <i>inexplorados</i> de <b>potencial humano</b>. Cada <i>caminho</i> que se <b>abre</b> <i>oferece</i> <b>lições únicas</b> e <i>oportunidades</i> de <b>crescimento</b> <i>extraordinário</i>.</p><br><p>Você está <b>descobrindo</b> que <i>abraçar</i> o <b>ilimitado</b> <i>requer</i> <b>coragem</b> para <i>soltar</i> <b>limitações</b> <i>autoimpostas</i> e <b>crenças</b> que <i>restringem</i> <b>expressão</b> de seu <i>verdadeiro</i> <b>potencial</b>. Esta <i>liberação</i> <b>abre</b> <i>portais</i> para <b>possibilidades</b> <i>inimagináveis</i>.</p><br><p>Sua <b>conexão</b> com <i>força universal</i> está se <b>aprofundando</b> <i>constantemente</i>, <b>permitindo</b> que você <i>acesse</i> <b>recursos</b> e <i>sabedoria</i> que <b>transcendem</b> <i>conhecimento</i> <b>pessoal</b> e <i>oferecem</i> <b>insights</b> que <i>beneficiam</i> <b>coletividade</b>.</p><br><p>Você está <b>aprendendo</b> a <i>equilibrar</i> <b>ambições pessoais</b> com <i>serviço</i> ao <b>bem maior</b>, <i>criando</i> <b>sinergia</b> onde <i>realização individual</i> <b>contribui</b> para <i>elevação</i> <b>coletiva</b> e <i>vice-versa</i>.</p><br><p>Sua <b>maestria espiritual</b> está se <i>manifestando</i> não como <b>separação</b> do <i>mundo</i>, mas como <b>engajamento</b> mais <i>profundo</i> e <b>consciente</b> com <i>realidade</i> que <b>transforma</b> <i>experiências ordinárias</i> em <b>oportunidades</b> de <i>crescimento</i> e <b>serviço</b>.</p><br><p>Você está se tornando um <b>arquiteto de possibilidades</b> que <i>demonstra</i> como <b>consciousness humana</b> pode <i>transcender</i> <b>limitações</b> <i>aparentes</i> e <b>criar</b> <i>realidades</i> que <b>refletem</b> <i>potencial</i> <b>mais elevado</b> da <i>espécie</i>, <b>inspirando</b> <i>outros</i> a <b>também</b> <i>explorar</i> <b>dimensões</b> <i>inexploradas</i> de <b>capacidade humana</b> e <i>contribuir</i> para <b>evolução</b> <i>coletiva</i> através de <b>expressão</b> <i>autêntica</i> de <b>dons únicos</b> e <i>talentos</i> <b>extraordinários</b>, <i>criando</i> <b>rede</b> de <i>luz</i> e <b>sabedoria</b> que <i>conecta</i> <b>almas</b> <i>desperta</i> ao <b>redor</b> do <i>planeta</i> e <b>contribui</b> para <i>manifestação</i> de <b>nova era</b> de <i>consciência</i> <b>elevada</b> onde <i>potencial infinito</i> da <b>humanidade</b> se <i>expressa</i> através de <b>amor</b>, <i>sabedoria</i> e <b>cooperação</b> <i>consciente</i> para <b>bem-estar</b> de <i>toda</i> a <b>criação</b>.</p>";
            break;
          case 1:
            this.challengeNumbers.mainText = "<p><b>Desenvolvendo magistralmente</b> <i>independência</i> e <b>originalidade supremas</b> que <i>emergem</i> de <b>conexão profunda</b> com sua <i>essência autêntica</i> e <b>propósito único</b>, você <i>lidera transcendentalmente</i> com <b>iniciativas criativas cósmicas</b> e <i>projetos visionários</i> que <b>inspiram</b> <i>outros</i> a <b>despertar</b> seu <i>próprio potencial divino</i> e <b>descobrir</b> <i>capacidades</i> <b>extraordinárias</b> que <i>residem</i> <b>adormecidas</b> em suas <i>almas</i>, <b>criando</b> <i>ondas</i> de <b>despertar</b> e <i>transformação</i> que se <b>espalham</b> <i>exponencialmente</i> através de <b>redes</b> de <i>consciência</i>.</p><br><p>Sua <b>coragem pioneira transcendental</b> está <i>abrindo</i> <b>novos caminhos luminosos</b> e <i>dimensões</i> <b>inexploradas</b> para <i>crescimento pessoal</i> e <b>evolução coletiva</b> através de <i>visão inovadora</i> que <b>combina harmoniosamente</b> <i>sabedoria ancestral</i> com <b>insights futuristas</b> e <i>compreensão</i> <b>avançada</b> das <i>possibilidades</i> <b>emergentes</b> da <i>consciousness humana</i>, <b>criando</b> <i>pontes sagradas</i> entre <b>mundos</b> e <i>dimensões</i> que <b>elevam</b> <i>consciousness</i> da <b>humanidade</b> e <i>demonstram magistralmente</i> como <b>liderança autêntica</b> <i>serve</i> ao <b>bem maior</b> através de <i>exemplo radiante</i> de <b>integridade</b>, <i>coragem</i> e <b>amor incondicional</b> <i>aplicado</i> para <b>transformação positiva universal</b>.</p><br><p>Sua <b>independência suprema</b> está se <i>revelando</i> não como <b>separação</b> dos <i>outros</i>, mas como <b>liberdade</b> para <i>expressar</i> <b>autenticidade</b> de <i>maneiras</i> que <b>inspiram</b> <i>outros</i> a <b>também</b> <i>abraçar</i> sua <b>própria singularidade</b>. Esta <i>independência</i> <b>consciente</b> <i>cria</i> <b>espaço</b> para <i>inovação</i> e <b>criatividade</b> <i>extraordinárias</i>.</p><br><p>Você está <b>descobrindo</b> que <i>originalidade</i> <b>verdadeira</b> <i>emerge</i> quando você se <b>conecta</b> <i>profundamente</i> com <b>essência única</b> e <i>permite</i> que ela se <b>expresse</b> <i>livremente</i> através de <b>ações</b>, <i>criações</i> e <b>contribuições</b> que <i>refletem</i> sua <b>perspectiva</b> <i>distintiva</i> sobre <b>vida</b> e <i>realidade</i>.</p><br><p>Sua <b>coragem pioneira</b> está <i>permitindo</i> que você <b>explore</b> <i>territórios</i> <b>desconhecidos</b> de <i>possibilidade</i> e <b>potencial</b>, <i>criando</i> <b>mapas</b> e <i>caminhos</i> que <b>outros</b> podem <i>seguir</i> e <b>adaptar</b> para suas <i>próprias jornadas</i> de <b>descoberta</b> e <i>crescimento</i>.</p><br><p>Você está <b>aprendendo</b> a <i>integrar</i> <b>sabedoria</b> do <i>passado</i> com <b>visões</b> do <i>futuro</i>, <b>criando</b> <i>sínteses</i> <b>inovadoras</b> que <i>honram</i> <b>tradições valiosas</b> enquanto <i>abraçam</i> <b>possibilidades emergentes</b> de <i>evolução</i> e <b>transformação</b>.</p><br><p>Sua <b>visão inovadora</b> está <i>identificando</i> <b>oportunidades</b> para <i>criar</i> <b>soluções</b> que <i>abordam</i> <b>desafios</b> <i>contemporâneos</i> de <b>maneiras</b> que <i>beneficiam</i> <b>múltiplas gerações</b> e <i>contribuem</i> para <b>sustentabilidade</b> e <i>harmonia</i> <b>planetária</b>.</p><br><p>Você está se tornando um <b>catalisador de evolução</b> <i>consciente</i> que <b>demonstra</b> como <i>liderança autêntica</i> <b>emerge</b> não de <i>posições</i> de <b>autoridade</b>, mas de <i>capacidade</i> de <b>inspirar</b>, <i>elevar</i> e <b>empoderar</b> <i>outros</i> através de <b>exemplo</b> de <i>vida</i> <b>vivida</b> com <i>integridade</i>, <b>propósito</b> e <i>dedicação</i> ao <b>bem-estar</b> de <i>toda</i> a <b>comunidade</b> <i>planetária</i>, <b>criando</b> <i>legado</i> de <b>transformação positiva</b> que <i>inspira</i> <b>futuras gerações</b> de <i>líderes</i> a <b>também</b> <i>abraçar</i> <b>responsabilidade sagrada</b> de <i>usar</i> <b>dons únicos</b> e <i>capacidades</i> para <b>elevar</b> <i>consciousness coletiva</i> e <b>contribuir</b> para <i>manifestação</i> de <b>mundo</b> mais <i>harmonioso</i>, <b>compassivo</b> e <i>sustentável</i> onde <b>potencial divino</b> de <i>cada ser</i> é <b>reconhecido</b>, <i>honrado</i> e <b>nutrido</b> para <i>florescer</i> em <b>toda</b> sua <i>magnificência</i>.</p>";
            break;
          case 2:
this.challengeNumbers.mainText = "<p><b>Cultivando transcendentalmente</b> <i>sensibilidade</i> e <b>cooperação supremas</b> que <i>emergem</i> de <b>compreensão profunda</b> da <i>interconexão</i> de <b>todos os seres</b> e <i>reconhecimento</i> da <b>dignidade inerente</b> em <i>cada alma</i>, você <b>constrói magistralmente</b> <i>pontes cósmicas</i> de <b>compreensão</b> e <i>conexão</i> entre <b>pessoas</b> de <i>todas as origens</i>, <b>culturas</b> e <i>perspectivas</i>, <b>criando</b> <i>redes</i> de <b>entendimento mútuo</b> que <i>transcendem</i> <b>diferenças superficiais</b> e <i>revelam</i> <b>humanidade compartilhada</b> que <i>une</i> <b>todos</b> os <i>corações</i>.</p><br><p>Sua <b>diplomacia natural transcendental</b> está <i>criando</i> <b>ambientes harmoniosos</b> e <i>espaços sagrados</i> que <b>nutrem</b> <i>crescimento mútuo</i> e <b>florescimento</b> de <i>potencial individual</i> através de <b>sabedoria compassiva</b> que <i>honra</i> e <b>celebra</b> <i>diversidade</i> <b>extraordinária</b> da <i>experiência humana</i> enquanto <b>simultaneamente</b> <i>reconhece</i> e <b>celebra</b> <i>unidade fundamental</i> que <b>conecta</b> <i>todos</i> os <b>seres</b> em <i>tapeçaria</i> <b>sagrada</b> da <i>existência</i>, <b>inspirando</b> <i>colaborações transformadoras</i> que <b>elevam</b> <i>consciousness coletiva</i> e <b>demonstram</b> <i>poder extraordinário</i> da <b>empatia</b> <i>aplicada conscientemente</i> para <b>construir</b> <i>mundo</i> mais <b>justo</b>, <i>amoroso</i> e <b>harmonioso</b> para <i>todas</i> as <b>formas de vida</b>.</p><br><p>Sua <b>sensibilidade transcendental</b> está se <i>revelando</i> como <b>superpoder</b> que <i>permite</i> <b>perceber</b> <i>necessidades</i> <b>não expressas</b> e <i>criar</i> <b>soluções</b> que <i>atendem</i> <b>múltiplas perspectivas</b> <i>simultaneamente</i>. Esta <b>capacidade</b> de <i>sintonizar</i> com <b>frequências emocionais</b> <i>sutis</i> é <b>extraordinariamente valiosa</b> para <i>mediação</i> e <b>resolução</b> de <i>conflitos</i>.</p><br><p>Você está <b>descobrindo</b> que <i>cooperação suprema</i> <b>emerge</b> quando <i>pessoas</i> se <b>sentem</b> <i>verdadeiramente</i> <b>vistas</b>, <i>ouvidas</i> e <b>valorizadas</b> em sua <i>totalidade</i>. Sua <b>habilidade</b> de <i>criar</i> <b>esses espaços</b> de <i>aceitação</i> <b>catalisa</b> <i>colaborações</i> <b>extraordinárias</b>.</p><br><p>Sua <b>diplomacia natural</b> está <i>integrando</i> <b>sabedoria emocional</b> com <i>inteligência estratégica</i>, <b>criando</b> <i>abordagens</i> que são <b>simultaneamente</b> <i>eficazes</i> e <b>compassivas</b>, <i>práticas</i> e <b>inspiradoras</b>.</p><br><p>Você está <b>aprendendo</b> a <i>navegar</i> <b>complexidades</b> de <i>diferentes</i> <b>sistemas de valores</b> e <i>perspectivas</i> <b>culturais</b>, <i>encontrando</i> <b>pontos comuns</b> que <i>servem</i> como <b>fundação</b> para <i>entendimento</i> e <b>cooperação</b> <i>mutuamente benéfica</i>.</p><br><p>Sua <b>capacidade</b> de <i>honrar</i> <b>diversidade</b> enquanto <i>celebra</i> <b>unidade</b> está <i>criando</i> <b>modelos</b> de <i>inclusão</i> que <b>maximizam</b> <i>contribuições únicas</i> de <b>cada indivíduo</b> enquanto <i>constrói</i> <b>senso</b> de <i>pertencimento</i> e <b>propósito compartilhado</b>.</p><br><p>Você está se tornando um <b>arquiteto de harmonia</b> <i>social</i> que <b>demonstra</b> como <i>diferenças</i> podem ser <b>transformadas</b> de <i>fontes</i> de <b>conflito</b> em <i>oportunidades</i> para <b>crescimento</b>, <i>aprendizado</i> e <b>enriquecimento mútuo</b>, <i>criando</i> <b>comunidades</b> e <i>organizações</i> onde <b>cada pessoa</b> pode <i>florescer</i> em <b>sua autenticidade</b> enquanto <i>contribui</i> para <b>bem-estar coletivo</b>, <i>inspirando</i> <b>movimento global</b> em <i>direção</i> a <b>sociedades</b> mais <i>inclusivas</i>, <b>compassivas</b> e <i>colaborativas</i> que <b>honram</b> <i>dignidade</i> de <b>cada ser</b> e <i>reconhecem</i> que <b>verdadeira prosperidade</b> <i>emerge</i> quando <b>todos</b> têm <i>oportunidade</i> de <b>contribuir</b> com seus <i>dons únicos</i> para <b>tapestry</b> <i>rica</i> e <b>diversa</b> da <i>experiência humana</i> <b>coletiva</b>, <i>criando</i> <b>legado</b> de <i>amor</i>, <b>compreensão</b> e <i>cooperação</i> que <b>beneficia</b> <i>gerações futuras</i> e <b>contribui</b> para <i>evolução</i> da <b>consciousness planetária</b>.</p>";
            break;
          case 3:
this.challengeNumbers.mainText = "<p><b>Abraçando magistralmente</b> sua <i>criatividade única suprema</i> e <b>reconhecendo</b> o <i>dom extraordinário</i> que <b>flui</b> através de sua <i>essência artística</i>, você <b>encontra</b> <i>maneiras transcendentais</i> e <b>inspiradoras</b> de se <i>expressar autenticamente</i> através de <b>canais artísticos</b> e <i>formas criativas</i> que <b>tocam</b> <i>almas profundamente</i> e <b>despertam</b> <i>potencial criativo adormecido</i> em <b>corações</b> que <i>anseiam</i> por <b>beleza</b>, <i>verdade</i> e <b>expressão autêntica</b> da <i>experiência humana</i> em <b>toda</b> sua <i>complexidade</i> e <b>magnificência</b>.</p><br><p>Sua <b>comunicação elevada transcendental</b> está <i>tocando</i> <b>corações</b> <i>profundamente</i> e <b>despertando</b> <i>potencial criativo</i> em <b>outros</b> através de seu <i>exemplo radiante</i> de <b>autenticidade corajosa</b> e <i>vulnerabilidade consciente</i> que <b>demonstra magistralmente</b> como <i>abertura</i> do <b>coração</b> e <i>coragem</i> de <b>mostrar</b> <i>verdade interior</i> se <b>torna</b> <i>força transformadora</i> <b>extraordinariamente poderosa</b>, <i>inspirando</i> <b>outros</b> a <i>também</i> <b>abraçar</b> seus <i>dons únicos</i> e <b>contribuir</b> para <i>tapestry cósmica</i> de <b>beleza</b> e <i>verdade</i> que <b>eleva</b> <i>consciousness humana</i> através de <b>arte</b> que <i>cura</i>, <b>transforma</b> e <i>conecta</i> <b>almas</b> através de <i>linguagem universal</i> da <b>criatividade</b>.</p><br><p>Sua <b>criatividade suprema</b> está se <i>revelando</i> como <b>portal</b> para <i>dimensões</i> de <b>consciência</b> onde <i>inspiração</i> e <b>intuição</b> se <i>encontram</i> para <b>criar</b> <i>obras</i> que <b>transcendem</b> <i>limitações</i> <b>convencionais</b> e <i>oferecem</i> <b>vislumbres</b> de <i>realidades</i> mais <b>elevadas</b> e <i>possibilidades</i> <b>extraordinárias</b>.</p><br><p>Você está <b>descobrindo</b> que <i>autenticidade</i> em <b>expressão criativa</b> <i>ressoa</i> em <b>frequências</b> que <i>tocam</i> <b>aspectos</b> mais <i>profundos</i> da <b>experiência humana</b>, <i>criando</i> <b>conexões</b> que <i>transcendem</i> <b>barreiras</b> <i>culturais</i>, <b>linguísticas</b> e <i>temporais</i>.</p><br><p>Sua <b>vulnerabilidade consciente</b> está <i>demonstrando</i> que <b>força verdadeira</b> <i>reside</i> na <b>coragem</b> de <i>ser</i> <b>genuinamente</b> <i>você mesmo</i>, <b>inspirando</b> <i>outros</i> a <b>também</b> <i>remover</i> <b>máscaras</b> e <i>expressar</i> sua <b>verdade interior</b> através de <i>formas criativas</i> <b>únicas</b>.</p><br><p>Você está <b>aprendendo</b> a <i>canalizar</i> <b>emoções</b> e <i>experiências</i> <b>pessoais</b> em <i>arte</i> que <b>oferece</b> <i>cura</i> e <b>transformação</b> não apenas para <i>você</i>, mas para <b>todos</b> que <i>encontram</i> suas <b>criações</b>. Esta <i>alquimia</i> de <b>dor</b> em <i>beleza</i> é <b>extraordinariamente poderosa</b>.</p><br><p>Sua <b>comunicação transcendental</b> está <i>integrando</i> <b>múltiplas formas</b> de <i>expressão</i> para <b>criar</b> <i>experiências</i> <b>multissensoriais</b> que <i>engajam</i> <b>diferentes aspectos</b> da <i>consciência</i> e <b>facilitam</b> <i>transformações</i> <b>profundas</b> em <i>audiências</i>.</p><br><p>Você está se tornando um <b>curador através da arte</b> que <i>demonstra</i> como <b>criatividade</b> pode <i>servir</i> como <b>medicina</b> para <i>alma</i> e <b>catalisador</b> para <i>despertar espiritual</i>, <b>criando</b> <i>obras</i> que não apenas <b>expressam</b> <i>beleza</i>, mas <b>facilitam</b> <i>processos</i> de <b>cura</b>, <i>crescimento</i> e <b>transformação</b> em <i>indivíduos</i> e <b>comunidades</b>, <i>contribuindo</i> para <b>movimento global</b> de <i>despertar</i> <b>criativo</b> onde <i>arte</i> é <b>reconhecida</b> como <i>força</i> <b>essencial</b> para <i>evolução</i> da <b>consciousness humana</b> e <i>criação</i> de <b>mundo</b> mais <i>belo</i>, <b>compassivo</b> e <i>inspirador</i> onde <b>cada pessoa</b> é <i>encorajada</i> a <b>descobrir</b> e <i>expressar</i> sua <b>criatividade única</b> como <i>contribuição</i> para <b>tapestry</b> <i>coletiva</i> de <b>beleza</b> e <i>significado</i> que <b>enriquece</b> <i>experiência</i> de <b>vida</b> para <i>todos</i> os <b>seres</b>.</p>";
            break;
          case 4:
this.challengeNumbers.mainText = "<p><b>Desenvolvendo transcendentalmente</b> <i>disciplina produtiva suprema</i> que <b>emerge</b> de <i>conexão profunda</i> com <b>propósito sagrado</b> e <i>visão clara</i> do <b>impacto</b> que <i>deseja</i> <b>criar</b> no <i>mundo</i>, você <b>constrói magistralmente</b> <i>fundações sólidas cósmicas</i> e <b>estruturas</b> <i>extraordinariamente robustas</i> para seus <b>sonhos mais elevados</b> e <i>visões transformadoras</i> que <b>transcendem</b> <i>limitações</i> <b>convencionais</b> e <i>abrem</i> <b>caminhos</b> para <i>manifestação</i> de <b>realidades</b> que <i>beneficiam</i> <b>não apenas</b> sua <i>própria jornada</i>, mas <b>contribuem significativamente</b> para <i>elevação</i> da <b>experiência humana</b> <i>coletiva</i>.</p><br><p>Sua <b>organização consciente transcendental</b> está <i>criando</i> <b>sistemas sustentáveis</b> e <i>estruturas</i> <b>inteligentes</b> que <i>beneficiam</i> <b>gerações futuras</b> através de <i>sabedoria prática</i> <b>aplicada</b> com <i>visão</i> de <b>longo prazo</b> e <i>compreensão profunda</i> das <b>consequências</b> e <i>impactos</i> de <b>ações</b> <i>presentes</i> nas <b>possibilidades futuras</b>, <i>demonstrando magistralmente</i> como <b>disciplina consciente</b> se <i>torna</i> <b>força criativa</b> <i>extraordinariamente poderosa</i> que <b>manifesta</b> <i>realidades elevadas</i> e <b>transforma</b> <i>visões</i> em <b>experiências tangíveis</b>, <i>inspirando</i> <b>outros</b> a <i>também</i> <b>abraçar</b> <i>processo construtivo</i> de <b>crescimento</b> que <i>honra</i> tanto <b>estabilidade</b> quanto <i>inovação</i> para <b>criar</b> <i>legados duradouros</i> que <b>nutrem</b> <i>evolução</i> da <b>consciousness humana</b>.</p><br><p>Sua <b>disciplina suprema</b> está se <i>revelando</i> não como <b>rigidez</b> ou <i>limitação</i>, mas como <b>liberdade</b> <i>estruturada</i> que <b>cria</b> <i>espaço</i> para <b>criatividade</b> e <i>inovação</i> <b>florescerem</b> dentro de <i>frameworks</i> <b>sólidos</b> que <i>sustentam</i> <b>crescimento</b> <i>consistente</i> e <b>progresso</b> <i>sustentável</i>.</p><br><p>Você está <b>descobrindo</b> que <i>fundações sólidas</i> <b>permitem</b> <i>construção</i> de <b>estruturas</b> cada vez mais <i>ambiciosas</i> e <b>visionárias</b>, <i>criando</i> <b>plataformas</b> <i>estáveis</i> a partir das quais <b>pode</b> <i>alcançar</i> <b>alturas</b> <i>extraordinárias</i> de <b>realização</b> e <i>impacto</i>.</p><br><p>Sua <b>organização consciente</b> está <i>integrando</i> <b>eficiência</b> com <i>sustentabilidade</i>, <b>criando</b> <i>sistemas</i> que são <b>simultaneamente</b> <i>produtivos</i> e <b>regenerativos</b>, <i>eficazes</i> no <b>presente</b> e <i>benéficos</i> para o <b>futuro</b>.</p><br><p>Você está <b>aprendendo</b> a <i>equilibrar</i> <b>ambições</b> de <i>curto prazo</i> com <b>visão</b> de <i>longo prazo</i>, <b>criando</b> <i>estratégias</i> que <b>geram</b> <i>momentum</i> <b>imediato</b> enquanto <i>constroem</i> em <b>direção</b> a <i>objetivos</i> <b>maiores</b> e <i>mais significativos</i>.</p><br><p>Sua <b>sabedoria prática</b> está se <i>manifestando</i> como <b>capacidade</b> de <i>transformar</i> <b>ideais elevados</b> em <i>ações concretas</i> e <b>resultados tangíveis</b>, <i>demonstrando</i> que <b>espiritualidade</b> e <i>praticidade</i> podem <b>coexistir</b> e <i>se enriquecer</i> <b>mutuamente</b>.</p><br><p>Você está se tornando um <b>arquiteto de realidades</b> <i>sustentáveis</i> que <b>demonstra</b> como <i>disciplina consciente</i> pode <b>servir</b> como <i>ponte</i> entre <b>sonhos</b> e <i>manifestação</i>, <b>criando</b> <i>modelos</i> de <b>sucesso</b> que <i>integram</i> <b>realização pessoal</b> com <i>contribuição</i> para <b>bem-estar coletivo</b>, <i>inspirando</i> <b>movimento</b> em <i>direção</i> a <b>abordagens</b> mais <i>conscientes</i> e <b>sustentáveis</b> ao <i>desenvolvimento</i> e <b>crescimento</b> que <i>honram</i> tanto <b>necessidades</b> <i>presentes</i> quanto <b>responsabilidades</b> com <i>gerações futuras</i>, <b>criando</b> <i>legados</i> de <b>sabedoria</b>, <i>estabilidade</i> e <b>inovação</b> que <i>servem</i> como <b>fundações</b> para <i>continued</i> <b>evolução</b> da <i>consciousness humana</i> e <b>manifestação</b> de <i>mundo</i> mais <b>harmonioso</b>, <i>próspero</i> e <b>sustentável</b> para <i>todas</i> as <b>formas de vida</b>.</p>";
            break;
          case 5:
this.challengeNumbers.mainText = "<p><b>Equilibrando magistralmente</b> <i>liberdade</i> e <b>responsabilidade supremas</b> em <i>síntese harmoniosa</i> que <b>honra</b> tanto <i>necessidade</i> de <b>exploração</b> e <i>crescimento pessoal</i> quanto <b>compromisso</b> com <i>bem-estar coletivo</i> e <b>evolução</b> da <i>humanidade</i>, você <b>explora</b> a <i>vida transcendentalmente</i> com <b>curiosidade consciente cósmica</b> que <i>abraça</i> <b>mistérios</b> e <i>possibilidades infinitas</i> da <b>existência</b> enquanto <i>mantém</i> <b>consciência profunda</b> do <i>impacto</i> de suas <b>escolhas</b> e <i>ações</i> no <b>tecido</b> <i>interconectado</i> da <b>vida</b> e <i>experiência</i> <b>humana coletiva</b>.</p><br><p>Suas <b>aventuras inspiradas transcendentais</b> estão <i>expandindo</i> <b>horizontes</b> de <i>possibilidade</i> e <b>descoberta</b> não apenas para <i>você</i>, mas <b>inspirando</b> <i>outros</i> a <b>também</b> <i>crescer</i> e <b>explorar</b> através de seu <i>exemplo radiante</i> de <b>liberdade responsável</b> que <i>demonstra magistralmente</i> como <b>exploração consciente</b> e <i>aventura</i> <b>autêntica</b> se <i>tornam</i> <b>força transformadora</b> <i>extraordinariamente poderosa</i>, <b>criando</b> <i>pontes sagradas</i> entre <b>culturas</b>, <i>perspectivas</i> e <b>formas</b> de <i>compreender</i> a <b>realidade</b> que <i>elevam</i> <b>consciousness humana</b> através de <i>abertura corajosa</i> para <b>diversidade</b> de <i>experiências</i> que <b>enriquecem</b> <i>tapestry</i> da <b>vida</b> com <i>sabedoria</i>, <b>compaixão</b> e <i>compreensão</i> <b>expandida</b>.</p><br><p>Sua <b>liberdade suprema</b> está se <i>manifestando</i> não como <b>escape</b> de <i>responsabilidades</i>, mas como <b>capacidade</b> de <i>escolher conscientemente</i> como <b>engajar</b> com <i>mundo</i> de <b>maneiras</b> que <i>honram</i> tanto <b>autenticidade pessoal</b> quanto <i>compromisso</i> com <b>bem maior</b>.</p><br><p>Você está <b>descobrindo</b> que <i>verdadeira aventura</i> <b>reside</b> não apenas em <i>exploração</i> de <b>lugares</b> <i>externos</i>, mas na <b>coragem</b> de <i>explorar</i> <b>territórios internos</b> de <i>consciousness</i> e <b>potencial</b> <i>humano</i>, <b>criando</b> <i>jornadas</i> que <b>transformam</b> tanto <i>viajante</i> quanto <b>comunidades</b> <i>visitadas</i>.</p><br><p>Sua <b>curiosidade cósmica</b> está <i>levando</i> você a <b>questionar</b> <i>suposições</i> e <b>explorar</b> <i>perspectivas</i> que <b>expandem</b> <i>compreensão</i> de <b>realidade</b> e <i>possibilidade</i>, <b>criando</b> <i>sínteses</i> <b>inovadoras</b> entre <i>diferentes</i> <b>sistemas</b> de <i>conhecimento</i> e <b>sabedoria</b>.</p><br><p>Você está <b>aprendendo</b> a <i>navegar</i> <b>tensão criativa</b> entre <i>desejo</i> de <b>liberdade</b> e <i>necessidade</i> de <b>conexão</b>, <i>encontrando</i> <b>maneiras</b> de <i>honrar</i> ambos através de <b>escolhas</b> que <i>expandem</i> <b>possibilidades</b> para <i>si mesmo</i> e <b>outros</b>.</p><br><p>Sua <b>exploração consciente</b> está <i>demonstrando</i> que <b>crescimento</b> e <i>aventura</i> podem <b>coexistir</b> com <i>estabilidade</i> e <b>compromisso</b>, <i>criando</i> <b>modelos</b> de <i>vida</i> que <b>integram</b> <i>dinamismo</i> com <b>responsabilidade</b>.</p><br><p>Você está se tornando um <b>explorador de consciousness</b> que <i>demonstra</i> como <b>liberdade autêntica</b> <i>emerge</i> quando <b>escolhas pessoais</b> são <i>alinhadas</i> com <b>valores profundos</b> e <i>compromisso</i> com <b>bem-estar</b> de <i>toda</i> a <b>comunidade planetária</b>, <i>inspirando</i> <b>movimento global</b> em <i>direção</i> a <b>formas</b> de <i>vida</i> que <b>honram</b> tanto <i>necessidade humana</i> de <b>crescimento</b> e <i>exploração</i> quanto <b>responsabilidade</b> de <i>cuidar</i> do <b>planeta</b> e <i>uns dos outros</i>, <b>criando</b> <i>cultura</i> de <b>aventura consciente</b> onde <i>exploração</i> se <b>torna</b> <i>veículo</i> para <b>expansão</b> de <i>consciousness</i>, <b>construção</b> de <i>pontes</i> entre <b>culturas</b> e <i>criação</i> de <b>mundo</b> mais <i>conectado</i>, <b>compassivo</b> e <i>compreensivo</i> onde <b>diversidade</b> é <i>celebrada</i> como <b>fonte</b> de <i>riqueza</i> e <b>sabedoria</b> que <i>enriquece</i> <b>experiência</b> de <i>vida</i> para <b>todos</b> os <i>seres</i>.</p>";
            break;
          case 6:
this.challengeNumbers.mainText = "<p><b>Cultivando transcendentalmente</b> <i>amor incondicional supremo</i> que <b>flui</b> <i>diretamente</i> do <b>coração</b> da <i>criação</i> e se <b>expressa</b> através de sua <i>essência</i> <b>compassiva</b>, você <i>serve magistralmente</i> como <b>farol cósmico</b> de <i>compaixão</i> e <b>luz</b> que <i>irradia</i> <b>cura</b>, <i>esperança</i> e <b>transformação</b> para <i>todos</i> os <b>seres</b> que <i>cruzam</i> seu <b>caminho</b> ou <i>simplesmente</i> <b>entram</b> na <i>esfera</i> de sua <b>influência</b> <i>amorosa</i> e <b>energia</b> <i>regenerativa</i> que <b>transcende</b> <i>limitações</i> <b>físicas</b> e <i>alcança</i> <b>dimensões</b> <i>espirituais</i> onde <b>verdadeira cura</b> e <i>transformação</i> <b>ocorrem</b>.</p><br><p>Sua <b>dedicação transcendental</b> ao <i>cuidado</i> e <b>serviço</b> está <i>criando</i> <b>ambientes nutritivos</b> e <i>espaços sagrados</i> que <b>promovem</b> <i>cura profunda</i> e <b>crescimento espiritual</b> através de sua <i>presença amorosa</i> que <b>desperta</b> <i>potencial divino</i> e <b>essência</b> <i>sagrada</i> em <b>cada coração</b> que <i>toca</i>, <b>demonstrando magistralmente</b> como <i>amor</i> <b>aplicado conscientemente</b> e <i>compaixão</i> <b>direcionada</b> com <i>intenção pura</i> se <b>tornam</b> <i>força transformadora</i> mais <b>poderosa</b> do <i>universo</i>, <b>inspirando</b> <i>outros</i> a <b>também</b> <i>abraçar</i> <b>missão sagrada</b> de <i>servir</i> com <b>alegria</b>, <i>propósito elevado</i> e <b>dedicação</b> <i>incondicional</i> que <b>eleva</b> <i>consciousness coletiva</i> através de <b>compaixão radiante</b> que <i>cura</i> <b>feridas antigas</b> e <i>nutre</i> <b>florescimento</b> do <i>potencial humano supremo</i>.</p><br><p>Seu <b>amor incondicional</b> está se <i>revelando</i> como <b>força</b> que <i>transcende</i> <b>julgamentos</b>, <i>expectativas</i> e <b>limitações</b> <i>humanas</i>, <b>oferecendo</b> <i>aceitação</i> e <b>compaixão</b> que <i>permite</i> <b>outros</b> <i>experimentar</i> sua <b>própria divindade</b> e <i>valor inerente</i>.</p><br><p>Você está <b>descobrindo</b> que <i>verdadeiro serviço</i> <b>emerge</b> não de <i>obrigação</i> ou <b>sacrifício</b>, mas de <i>alegria natural</i> que <b>surge</b> quando <i>coração</i> está <b>alinhado</b> com <i>propósito</i> de <b>amar</b> e <i>servir</i>. Esta <b>alegria</b> no <i>serviço</i> é <b>contagiosa</b> e <i>inspiradora</i>.</p><br><p>Sua <b>presença amorosa</b> está <i>criando</i> <b>campo energético</b> de <i>cura</i> que <b>permite</b> <i>outros</i> <b>relaxar</b> <i>defesas</i> e <b>acessar</b> <i>aspectos</i> mais <b>vulneráveis</b> e <i>autênticos</i> de <b>si mesmos</b>, <i>facilitando</i> <b>processos</b> de <i>cura</i> e <b>crescimento</b> <i>profundos</i>.</p><br><p>Você está <b>aprendendo</b> a <i>equilibrar</i> <b>compaixão</b> com <i>sabedoria</i>, <b>oferecendo</b> <i>suporte</i> que <b>empodera</b> ao invés de <i>criar</i> <b>dependência</b>, <i>amor</i> que <b>liberta</b> ao invés de <i>controlar</i>.</p><br><p>Sua <b>dedicação</b> ao <i>cuidado</i> está <b>demonstrando</b> que <i>força</i> e <b>gentileza</b> podem <i>coexistir</i>, que <b>firmeza</b> e <i>compaixão</i> podem <b>trabalhar juntas</b> para <i>criar</i> <b>ambientes</b> que <i>nutrem</i> <b>crescimento</b> <i>autêntico</i>.</p><br><p>Você está se tornando um <b>curador de almas</b> que <i>trabalha</i> através de <b>frequências</b> de <i>amor puro</i> para <b>despertar</b> <i>memórias</i> de <b>wholeness</b> e <i>potencial divino</i> em <b>outros</b>, <i>demonstrando</i> que <b>cada ser</b> <i>carrega</i> <b>semente</b> de <i>divindade</i> que <b>pode</b> <i>florescer</i> quando <b>nutrida</b> com <i>amor</i>, <b>aceitação</b> e <i>compaixão</i> <b>genuínos</b>, <i>criando</i> <b>ondas</b> de <i>transformação</i> que se <b>espalham</b> através de <i>famílias</i>, <b>comunidades</b> e <i>redes</i> de <b>relacionamento</b>, <i>contribuindo</i> para <b>cura coletiva</b> de <i>traumas</i> <b>ancestrais</b> e <i>padrões</i> de <b>separação</b> que <i>limitam</i> <b>expressão</b> do <i>potencial humano</i>, <b>inspirando</b> <i>movimento global</i> em <b>direção</b> a <i>sociedade</i> mais <b>compassiva</b> onde <i>cuidado mútuo</i> e <b>amor incondicional</b> <i>formam</i> <b>fundação</b> para <i>todas</i> as <b>interações</b> e <i>sistemas</i>, <b>criando</b> <i>mundo</i> onde <b>cada ser</b> pode <i>florescer</i> em <b>sua magnificência</b> <i>única</i> enquanto <b>contribui</b> para <i>bem-estar</i> do <b>todo</b>.</p>";
            break;
          case 7:
this.challengeNumbers.mainText = "<p><b>Integrando magistralmente</b> <i>sabedoria intuitiva suprema</i> com <b>conhecimento prático transcendental</b> em <i>síntese extraordinária</i> que <b>honra</b> tanto <i>wisdom</i> que <b>emerge</b> das <i>profundezas</i> da <b>alma</b> quanto <i>conhecimento</i> que é <b>cultivado</b> através de <i>estudo</i>, <b>experiência</b> e <i>observação</i> <b>cuidadosa</b> da <i>realidade</i>, você se <b>torna</b> <i>guia espiritual cósmico</i> e <b>mentor</b> <i>extraordinário</i> que <b>ilumina</b> <i>caminhos sagrados</i> e <b>possibilidades</b> de <i>crescimento</i> para <b>outros buscadores</b> da <i>verdade</i> que <b>anseiam</b> por <i>orientação</i> e <b>clarity</b> em suas <i>jornadas</i> de <b>descoberta</b> e <i>evolução</i> <b>espiritual</b>.</p><br><p>Sua <b>busca transcendental</b> pela <i>verdade</i> e <b>compreensão profunda</b> dos <i>mistérios</i> da <b>existência</b> está <i>iluminando</i> <b>caminhos</b> para <i>crescimento espiritual autêntico</i> e <b>transformação</b> <i>genuína</i> através de <b>synthesis perfeita</b> entre <i>razão</i> e <b>intuição</b>, <i>mente</i> e <b>coração</b>, <i>conhecimento</i> e <b>sabedoria</b>, <i>demonstrando magistralmente</i> como <b>sabedoria</b> <i>aplicada conscientemente</i> e <b>integrada</b> com <i>compassão</i> se <b>torna</b> <i>luz</i> que <b>guia</b> <i>humanity</i> através de <b>tempos</b> de <i>transformação</i>, <b>incerteza</b> e <i>mudança</i>, <b>inspirando</b> <i>outros</i> a <b>confiar</b> em <i>wisdom interior</i> e <b>intuição</b> <i>sagrada</i> enquanto <b>honra</b> e <i>integra</i> <b>knowledge acumulado</b> e <i>tradições</i> de <b>sabedoria</b> para <i>navegar</i> <b>complexidades</b> da <i>existência</i> com <b>clareza</b>, <i>propósito elevado</i> e <b>discernimento</b> <i>espiritual</i>.</p><br><p>Sua <b>sabedoria intuitiva suprema</b> está se <i>manifestando</i> como <b>capacidade</b> de <i>acessar</i> <b>conhecimento</b> que <i>transcende</i> <b>limitações</b> da <i>mente racional</i>, <b>oferecendo</b> <i>insights</i> que <b>iluminam</b> <i>aspectos</i> <b>ocultos</b> da <i>realidade</i> e <b>revelam</b> <i>conexões</i> <b>profundas</b> entre <i>aparentemente</i> <b>fenômenos separados</b>.</p><br><p>Você está <b>descobrindo</b> que <i>verdadeira sabedoria</i> <b>emerge</b> na <i>intersecção</i> entre <b>conhecimento</b> <i>intelectual</i> e <b>compreensão intuitiva</b>, <i>criando</i> <b>understanding</b> que é <i>tanto</i> <b>profundo</b> quanto <i>prático</i>, <b>espiritual</b> quanto <i>aplicável</i>.</p><br><p>Sua <b>synthesis perfeita</b> está <i>demonstrando</i> que <b>razão</b> e <i>intuição</i> não são <b>opostos</b>, mas <i>aspectos complementares</i> de <b>intelligence</b> <i>humana</i> que, quando <b>integrados</b>, <i>criam</i> <b>capacidade</b> de <i>compreensão</i> <b>extraordinariamente</b> <i>rica</i> e <b>nuanced</b>.</p><br><p>Você está <b>aprendendo</b> a <i>comunicar</i> <b>insights espirituais</b> de <i>maneiras</i> que são <b>acessíveis</b> e <i>relevantes</i> para <b>pessoas</b> em <i>diferentes</i> <b>estágios</b> de <i>desenvolvimento</i> <b>espiritual</b>, <i>adaptando</i> <b>linguagem</b> e <i>abordagem</i> sem <b>comprometer</b> <i>integridade</i> da <b>mensagem</b>.</p><br><p>Sua <b>busca pela verdade</b> está <i>revelando</i> que <b>wisdom</b> <i>autêntica</i> é <b>humilde</b> e <i>sempre</i> <b>aberta</b> a <i>new</i> <b>understanding</b>, <i>reconhecendo</i> que <b>journey</b> de <i>discovery</i> é <b>infinito</b> e <i>cada</i> <b>insight</b> <i>abre</i> <b>doors</b> para <i>deeper</i> <b>mysteries</b>.</p><br><p>Você está se tornando um <b>bridge-builder</b> entre <i>mundos</i> que <b>conecta</b> <i>ancient wisdom</i> com <b>contemporary understanding</b>, <i>tradições espirituais</i> com <b>insights modernos</b>, <i>criando</i> <b>frameworks</b> de <i>compreensão</i> que <b>honram</b> <i>past</i> enquanto <b>abraçam</b> <i>future</i>, <b>demonstrando</b> que <i>verdadeira</i> <b>spiritual guidance</b> <i>emerge</i> quando <b>wisdom</b> é <i>grounded</i> em <b>both</b> <i>transcendent</i> <b>understanding</b> e <i>practical</i> <b>application</b>, <i>inspirando</i> <b>movement</b> em <i>direção</i> a <b>approaches</b> to <i>spiritual</i> <b>development</b> que são <i>both</i> <b>profound</b> e <i>practical</i>, <b>transformative</b> e <i>sustainable</i>, <b>creating</b> <i>communities</i> of <b>seekers</b> que <i>support</i> <b>each other</b> em <i>journeys</i> de <b>discovery</b> e <i>growth</i> enquanto <b>contributing</b> to <i>collective</i> <b>elevation</b> de <i>human</i> <b>consciousness</b> através de <i>shared</i> <b>wisdom</b>, <i>mutual</i> <b>support</b> e <i>collaborative</i> <b>exploration</b> dos <i>infinite</i> <b>possibilities</b> para <i>human</i> <b>evolution</b> e <i>spiritual</i> <b>awakening</b>.</p>";
            break;
          case 8:
this.challengeNumbers.mainText = "<p><b>Canalizando magistralmente</b> <i>poder pessoal conscientemente supremo</i> que flui através de <b>conexão profunda</b> com propósito sagrado e compreensão de sua responsabilidade como <i>guardião de energia</i> e recursos extraordinários, você <b>manifesta transcendentalmente</b> abundância equilibrada cósmica que transcende limitações de escassez e serve ao <i>bem maior da humanidade</i> através de aplicações conscientes de riqueza, influência e capacidades que criam <b>ondas de transformação positiva</b> e elevação para incontáveis seres.</p><br><p>Sua <b>liderança inspirada transcendental</b> está criando prosperidade e abundância que beneficia toda a comunidade e se estende além de círculos imediatos através de <i>visão integrada</i> e abordagem holística que honra tanto sucesso material quanto <b>crescimento espiritual</b>, demonstrando magistralmente como poder aplicado com sabedoria, discernimento e <i>compaixão genuína</i> se torna força transformadora extraordinariamente poderosa que eleva circunstâncias e possibilidades para todos os envolvidos, <b>inspirando outros</b> a também abraçar a responsabilidade sagrada de usar influência, recursos e capacidades para bem-estar universal e evolução da consciência humana através de seu <i>exemplo radiante</i> de abundância consciente e administração responsável.</p><br><p>Seu <b>poder pessoal supremo</b> está se manifestando não como dominação sobre outros, mas como capacidade de <i>empoderar, elevar e criar oportunidades</i> que permitem outros também florescer e expressar seu próprio potencial único.</p><br><p>Você está descobrindo que <b>verdadeira abundância</b> emerge quando sucesso é compartilhado e prosperidade é criada de maneiras que <i>elevam comunidades inteiras</i> ao invés de concentrar riqueza em poucas mãos.</p><br><p>Sua <b>visão integrada</b> está demonstrando que sucesso material e crescimento espiritual podem coexistir e se enriquecer mutuamente, criando <i>modelos de prosperidade</i> que honram tanto necessidades práticas quanto aspirações elevadas.</p><br><p>Você está aprendendo a equilibrar ambição com humildade, confiança com abertura ao feedback, impulso para conquistas com <b>compromisso com práticas éticas</b> e sustentáveis.</p><br><p>Sua <b>liderança inspirada</b> está criando culturas e ambientes onde pessoas se sentem valorizadas, empoderadas e motivadas a contribuir com seu melhor, resultando em <i>conquistas coletivas</i> que excedem o que qualquer indivíduo poderia realizar sozinho.</p><br><p>Você está se tornando um <b>catalisador para capitalismo consciente</b> e prosperidade sustentável que demonstra como negócios e liderança podem servir como veículos para impacto social e ambiental positivo, criando modelos de sucesso que integram lucro com propósito, crescimento com sustentabilidade, e conquista com <i>contribuição ao bem maior</i>, inspirando nova geração de líderes que compreendem que verdadeiro poder reside na capacidade de criar mudança positiva e elevar outros, contribuindo para <b>transformação de sistemas econômicos e sociais</b> em direção a maior equidade, sustentabilidade e administração consciente de recursos planetários para benefício de toda a vida e gerações futuras.</p>";
break;
          case 9:
this.challengeNumbers.mainText = "<p><b>Expandindo magistralmente</b> sua <i>compaixão universalmente suprema</i> que transcende fronteiras de nacionalidade, cultura, espécie e qualquer forma de separação aparente, você <b>serve transcendentalmente</b> à humanidade e toda a criação com dedicação cósmica e compromisso profundo que abraça todos os seres com <i>amor incondicional</i> que reconhece a divindade inerente e interconexão de toda a vida, criando <b>campo de cura e transformação</b> que se estende muito além de interações imediatas e toca incontáveis vidas através de ondas de amor e compaixão.</p><br><p>Sua <b>visão transformadora transcendental</b> está inspirando mudanças positivas e mudanças fundamentais que elevam a consciência coletiva e contribuem para evolução da humanidade através de <i>serviço desinteressado</i> e dedicação altruísta que demonstra magistralmente o poder extraordinário do amor aplicado globalmente e compaixão direcionada com intenção de cura e elevação, <b>criando ondas de cura</b> e transformação que se estendem por todo o planeta e alcançam dimensões de consciência que transcendem limitações físicas, inspirando outros a também abraçar a <i>missão sagrada</i> de curar o mundo através de compaixão radiante que transforma sofrimento em sabedoria e dor em poder para criar <b>futuro melhor</b> para todas as formas de vida na Terra.</p><br><p>Sua <b>compaixão universal suprema</b> está se manifestando como capacidade de ver além das aparências superficiais e conectar com a essência de cada ser, oferecendo <i>compreensão e apoio</i> que honra a dignidade e potencial de cada alma.</p><br><p>Você está descobrindo que <b>verdadeiro serviço</b> emerge quando desejos pessoais estão alinhados com o bem maior, criando harmonia entre <i>realização individual</i> e bem-estar coletivo.</p><br><p>Sua <b>dedicação cósmica</b> está demonstrando que amor não é recurso limitado, mas energia infinita que cresce mais forte quando compartilhada e se multiplica quando dada livremente.</p><br><p>Você está aprendendo a transformar desafios pessoais e dificuldades em <i>fontes de sabedoria</i> e compaixão que possibilitam compreensão mais profunda e serviço mais efetivo para outros enfrentando lutas similares.</p><br><p>Sua <b>visão transformadora</b> está identificando causas raiz do sofrimento e trabalhando para abordar questões sistêmicas que perpetuam desigualdade, injustiça e degradação ambiental.</p><br><p>Você está se tornando um <b>curador global</b> que trabalha em múltiplas dimensões simultaneamente - curando indivíduos, comunidades, ecossistemas e consciência coletiva através de abordagem integrada que reconhece a interconexão de toda a vida, demonstrando que <i>verdadeira cura</i> ocorre quando abordamos não apenas sintomas mas causas subjacentes de separação e sofrimento, inspirando movimento global em direção a culturas e sociedades que priorizam bem-estar de todos os seres, <b>criando mundo</b> onde compaixão guia tomada de decisões, amor informa políticas, e sabedoria molda sistemas que apoiam o florescimento de cada forma de vida em harmonia com ritmos e ciclos naturais da Terra, garantindo <i>futuro sustentável e próspero</i> para gerações vindouras.</p>";
break;
        }


      },

      habilitarCarregamento() {
        this.podeCarregar = true;
      },
      exportToPDF() {
        const pdfContent = this.$el;
        const options = {
          margin: 1,
          filename: `Signo.pdf`,
          image: {
            type: "jpeg",
            quality: 0.98
          },
          html2canvas: {
            scale: 2
          },
          jsPDF: {
            unit: "in",
            format: "letter",
            orientation: "portrait"
          }
        };

        html2pdf().from(pdfContent).set(options).save();
      },
      async chamarApi() {
        const userData = {
          full_name: this.full_name,
          day: this.day,
          month: this.month,
          year: this.year,
        };


        if (userData.day == 32) {
          userData.day = 31;
        }

        await this.calculateExpressionNumber();
        await this.calculateLifeNumber();
        await this.calculateSoulNumber();
        await this.calculatePersonalityNumber();
        await this.calculateMaturityNumber();
        await this.calculateSubconsciousSelfNumber();
        await this.calculateChallengeNumbers();
      },
      sortReports() {
        // Transforma o objeto 'reports' em um array de objetos e filtra fora os nulos
        let reportsArray = Object.values(this.reports).filter(report => report !== null && report.data && report.data
          .house != null);

        // Ordena o array com base na propriedade 'house' de cada objeto dentro de 'data'
        reportsArray.sort((a, b) => a.data.house - b.data.house);

        // O array ordenado está agora disponível para uso posterior
        return reportsArray;
      },
      async compressPDF(pdfDoc) {
        const pdfBytes = pdfDoc.output('arraybuffer');
        const pdfLibDoc = await PDFDocument.load(pdfBytes);

        // Remover metadados não essenciais
        pdfLibDoc.setTitle('');
        pdfLibDoc.setAuthor('');
        pdfLibDoc.setSubject('');
        pdfLibDoc.setKeywords([]);
        pdfLibDoc.setProducer('');
        pdfLibDoc.setCreator('');

        // Configurar a compressão adicional
        const compressedPdfBytes = await pdfLibDoc.save({
          useObjectStreams: false,
          compress: true,
        });

        // Baixar o PDF comprimido
        const blob = new Blob([compressedPdfBytes], {
          type: 'application/pdf'
        });
        console.log(blob);
        return compressedPdfBytes;
      },
      generatePDF() {
        // Certifique-se de que o DOM está atualizado antes de capturar o conteúdo
        this.$nextTick(() => {
          const element = document.getElementById('mapaAstrologico');
          html2pdf().set({
            margin: [0, 0, 0, 0], // Sem margens
            filename: 'documento.pdf',
            pagebreak: {
              mode: ['css', 'legacy']
            },
            image: {
              type: 'jpeg',
              quality: 0.98
            },
            html2canvas: {
              dpi: 300, // Para melhor qualidade de impressão
              scale: 2, // Ajuste conforme necessário para garantir nitidez
              letterRendering: true,
            },
            jsPDF: {
              unit: 'pt',
              format: 'a4',
              orientation: 'portrait'
            }
          }).from(element).save();
        });
      },
      async generateCartilha() {
        this.calculateExpressionNumber();
        this.calculateLifeNumber();
        this.calculateSoulNumber();
        this.calculatePersonalityNumber();
        this.calculateMaturityNumber();
        const doc = new jsPDF({
          compression: 'FAST'
        });
        const pageWidth = doc.internal.pageSize.getWidth();
        const pageHeight = doc.internal.pageSize.getHeight();

        // URL ou caminho local para a imagem
        const imageUrl = require('@/assets/carta-capa.png');

        // Converter imagem para formato aceito pelo jsPDF
        const imageData = await this.loadImage(imageUrl);

        // Função auxiliar para adicionar texto com verificação de espaço
        /*const addTextWithPageCheck = (text, fontSize, fontType, textColor, x, startY) => {
          doc.setFontSize(fontSize);
          doc.setFont('helvetica', fontType);
          doc.setTextColor(...textColor);
          let textLines = doc.splitTextToSize(text, pageWidth - x * 2);
          let y = startY;
          textLines.forEach(line => {
            if (y + fontSize > pageHeight - 10) { // Checa se a próxima linha cabe na página
              doc.addPage();
              y = 10; // Margem superior após nova página
            }
            doc.text(line, x, y);
            y += fontSize * 0.8; // Ajusta o espaçamento da linha baseado no tamanho da fonte
          });
        };*/


        const addTextWithPageCheck = (text, fontSize, fontType, textColor, x, startY, lineHeightFactor = 0.8) => {
          doc.setFontSize(fontSize);
          doc.setFont('helvetica', fontType);
          doc.setTextColor(...textColor);
          const lines = text.split('\n'); // divide o texto em várias linhas baseado em quebras de linha explícitas
          let y = startY;

          lines.forEach(originalLine => {
            let textLines = doc.splitTextToSize(originalLine, pageWidth - x *
              2); // quebra linhas longas para caberem na largura da página
            textLines.forEach(line => {
              if (y + fontSize > pageHeight - 10) { // Checa se a próxima linha cabe na página
                doc.addPage();
                y = 10; // Reseta a posição y para a margem superior da nova página
              }
              doc.text(line, x, y);
              y += fontSize * lineHeightFactor; // Ajusta o espaçamento da linha
            });
          });

          return y; // Retorna a posição y após adicionar o texto
        };

        // Adicionar imagem ao documento
        // A imagem cobrirá a totalidade da página A4
        doc.addImage(imageData, 'JPEG', 0, 0, 210, 297, undefined, 'FAST');

        // Adicionar nova página
        doc.addPage();

        const rectHeight = 20; // Altura do retângulo para o fundo, em mm

        // Coordenadas e dimensões do retângulo de fundo
        let rectY = 20; // Posição vertical inicial do retângulo no topo da página
        const lineHeightFactor = 0.8; // Ajuste esse valor conforme necessário para mais ou menos espaço entre linhas
        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const endYInicio = addTextWithPageCheck('Seja Bem-vindo(a)!', 24, 'bold', [128, 0, 128], 10, rectY,
          lineHeightFactor);

        // Adicionar texto normal abaixo do fundo roxo
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal

        const normalTextY = endYInicio + 5; // Posição Y um pouco abaixo do fundo roxo
        const endY = addTextWithPageCheck(
          'Olá! Que alegria ter você aqui, pronto para iniciar essa jornada fascinante de autodescoberta. Estou tão empolgada quanto você! É como se estivéssemos prestes a abrir um cofre que guarda os segredos da sua existência. Este Mapa Numerológico vai muito além de simples números e palavras; ele atua como uma bússola, orientando você pelos altos e baixos da sua trajetória.\nAqui estão alguns dos tesouros que você encontrará:',
          20, 'normal', [0, 0, 0], 10, normalTextY, lineHeightFactor);

        const normalTextY21 = endY + 5; // Posição Y um pouco abaixo do fundo roxo

        addTextWithPageCheck('Reconhecer Seus Pontos Fortes:', 20, 'normal', [128, 0, 128], 10, normalTextY21,
          lineHeightFactor);
        const endY212 = addTextWithPageCheck(
          '\nComo um reflexo que revela sua verdadeira essência, destacando seus talentos e habilidades únicos.',
          20, 'normal', [0, 0, 0], 10, normalTextY21, lineHeightFactor);

        const normalTextY22 = endY212 + 5; // Posição Y um pouco abaixo do fundo roxo

        addTextWithPageCheck('Compreender Sua Fase Atual:', 20, 'normal', [128, 0, 128], 10, normalTextY22,
          lineHeightFactor);
        addTextWithPageCheck(
          '\nUma lente que focaliza sua situação presente e o que é necessário para seu desenvolvimento.', 20,
          'normal', [0, 0, 0], 10, normalTextY22, lineHeightFactor);

        doc.addPage();

        addTextWithPageCheck('Aproveitar Melhor as Oportunidades:', 20, 'normal', [128, 0, 128], 10, 20,
          lineHeightFactor);
        const endY232 = addTextWithPageCheck(
          '\nUm roteiro que mostra os caminhos disponíveis à sua frente, auxiliando você a identificar e aproveitar as oportunidades.',
          20, 'normal', [0, 0, 0], 10, 20, lineHeightFactor);

        const normalTextY24 = endY232 + 5; // Posição Y um pouco abaixo do fundo roxo

        addTextWithPageCheck('Superar Bloqueios e Desafios:', 20, 'normal', [128, 0, 128], 10, normalTextY24,
          lineHeightFactor);
        const endY242 = addTextWithPageCheck(
          '\nJuntos, identificaremos os obstáculos no seu caminho e os transformaremos em degraus para o seu crescimento.',
          20, 'normal', [0, 0, 0], 10, normalTextY24, lineHeightFactor);

        const normalTextY25 = endY242 + 5; // Posição Y um pouco abaixo do fundo roxo

        addTextWithPageCheck(
          '\nAntes de avançarmos, preciso compartilhar minha empolgação: adorei criar o seu guia! Cada número e símbolo neste guia é como uma estrela no céu, juntos, eles contam a sua história única. Ao analisar cada detalhe, descobri o quão especial você é. Cada elemento revelou algo novo e surpreendente sobre você, e mal posso esperar para compartilhar tudo isso. Preste Atenção, Pois Vem Algo Importante Sua jornada de autodescoberta está prestes a começar, e tenho um pedido para você:\n\nDedique-se ao Próximo Capítulo (Descubra o Poder da Numerologia): Este é o primeiro passo para um universo novo e fascinante que está por vir.\n\nVamos começar! Se tiver qualquer dúvida, não hesite em me chamar!',
          20, 'normal', [0, 0, 0], 10, normalTextY25, lineHeightFactor);

        doc.addPage();

        const nextContentY = 20;
        addTextWithPageCheck('A Breve História da Numerologia', 22, 'normal', [128, 0, 128], 10, nextContentY,
          lineHeightFactor);
        addTextWithPageCheck(
          '\nAntes de mergulharmos em cada aspecto da sua vida, é importante entender mais sobre a Numerologia, uma arte antiga e fascinante que nos ajuda a compreender melhor a nós mesmos e o mundo ao nosso redor.\n\nA Numerologia tem raízes profundas e antigas. Como uma árvore robusta e bela, ela cresceu e se desenvolveu ao longo de milhares de anos. Para realmente entender a Numerologia, precisamos olhar para suas origens.\n\nAcredita-se que a Numerologia tenha surgido na antiga Babilônia e no Egito, há mais de 10.000 anos. No entanto, foi o filósofo grego Pitágoras, por volta do século VI a.C., quem é considerado o pai da Numerologia moderna. Pitágoras não era apenas um matemático genial, famoso pelo Teorema de Pitágoras, mas também um místico. Ele acreditava que os números eram mais do que simples formas de contar ou medir; eles tinham um significado profundo e espiritual.\n\nPitágoras acreditava que todo o universo poderia ser expresso através de números, e que estes poderiam revelar a harmonia e as vibrações do cosmos. É como se cada número fosse uma nota musical, e juntos, formassem uma bela melodia que nos ajuda a entender melhor o mundo ao nosso redor.\n\nTalvez você pense: "Isso parece um pouco complicado, não é?" Mas não se preocupe! Vamos descobrir juntos como tudo isso funciona. Vamos explorar o fascinante mundo da Numerologia e ver o que os números têm a nos dizer.',
          20, 'normal', [0, 0, 0], 10, nextContentY, lineHeightFactor);

        doc.addPage();

        addTextWithPageCheck('A Evolução da Numerologia ao Longo dos Séculos', 22, 'normal', [128, 0, 128], 10, 20,
          lineHeightFactor);
        addTextWithPageCheck(
          '\nA Numerologia evoluiu e se adaptou em diferentes culturas e períodos de tempo, desde os ensinamentos pitagóricos até as práticas modernas.\n\nNa China, por exemplo, os números sempre foram uma parte integral da cultura e do cotidiano. O número 8, que soa como a palavra para prosperidade em chinês, é considerado extremamente favorável. Muitas pessoas procuram incluir o número 8 em endereços, números de telefone e até mesmo em datas de casamento. Por outro lado, o número 4, que soa como a palavra para morte, é frequentemente evitado.\n\nNa Índia, a Numerologia é amplamente influenciada pelo sistema chamado "Jyotish" ou astrologia védica, que atribui significados profundos e complexos aos números. Por exemplo, o número 1 está associado ao Sol, simbolizando liderança e individualidade, enquanto o número 2 está associado à Lua, representando emoção e dualidade.\n\nDurante a Idade Média na Europa, a Numerologia era frequentemente utilizada em conjunto com outras formas de adivinhação e espiritualidade. No entanto, com o advento do Iluminismo e a ênfase crescente na razão sobre a fé, a Numerologia foi vista por muitos como superstição e perdeu popularidade. \n\nNo século XX, a Numerologia ganhou novo fôlego, principalmente por meio do trabalho de numerólogos como Dr. Julia Seton, Florence Campbell e Juno Jordan. Eles desenvolveram novas formas de interpretar os números e integraram a Numerologia em um quadro mais amplo de desenvolvimento pessoal e autoconhecimento.',
          20, 'normal', [0, 0, 0], 10, 20, lineHeightFactor);

        doc.addPage();

        addTextWithPageCheck('O que é a Numerologia?', 22, 'normal', [128, 0, 128], 10, 20, lineHeightFactor);
        addTextWithPageCheck(
          '\nA Numerologia é uma ciência e arte antiga que estuda a influência dos números em nossa vida. Mas como isso funciona na prática? Vamos usar alguns exemplos para ilustrar.\n\nImagine que cada número é como um personagem em uma novela, cada um com sua própria personalidade e energia. Por exemplo, o número 1 é como o herói da história: independente, forte e determinado. Ele representa liderança, ambição e originalidade.\n\nO número 2, por outro lado, é como o melhor amigo do herói: gentil, harmonioso e compreensivo. Ele é o pacificador que traz equilíbrio e cooperação.\n\nO número 3 é como o encantador da história: sociável, criativo e cheio de energia. Ele é um comunicador nato, sempre pronto para se expressar e compartilhar suas ideias.\n\nE o número 4 é o trabalhador dedicado: sempre confiável e prático. Ele representa estabilidade, ordem e pragmatismo.\n\nA Numerologia nos ajuda a entender a energia única de cada número e como ela influencia nossa vida. Cada número tem seu próprio papel a desempenhar em nossa jornada. Além disso, a Numerologia nos ajuda a entender as relações entre os números, como aprender uma nova linguagem, onde os números são as palavras e suas combinações criam frases e sentenças cheias de significado.',
          20, 'normal', [0, 0, 0], 10, 20, lineHeightFactor);

        doc.addPage();

        addTextWithPageCheck('Como os Números Influenciam a Vida das Pessoas', 22, 'normal', [128, 0, 128], 10, 20,
          lineHeightFactor);
        const endYCt = addTextWithPageCheck(
          '\nVamos explorar como cada um dos números da Numerologia se relaciona com diferentes aspectos da vida:\n\nEntendendo Nossos Talentos e Desafios: O Número de Expressão, calculado a partir das letras do nome completo, revela seus talentos naturais, habilidades e características pessoais. O Número de Desafio mostra os obstáculos que você precisa superar e as lições que deve aprender.\n\nDireção para o Futuro: O Número do Destino, calculado a partir da data de nascimento, é como um mapa rodoviário da vida, indicando as principais lições, oportunidades e desafios que você provavelmente encontrará.\n\nRelacionamentos e Compatibilidade: O Número da Alma, calculado a partir das vogais do nome completo, mostra o que você realmente deseja em um relacionamento e o que faz você se sentir realizado. O Número de Personalidade, calculado a partir das consoantes do nome completo, revela como você é percebido pelos outros, o que pode afetar a dinâmica dos relacionamentos.\n\nCrescimento Pessoal e Espiritual: O Número da Maturidade, calculado somando o Número do Destino e o Número de Expressão, indica o potencial para crescimento pessoal e cumprimento do seu propósito na vida, geralmente a partir dos 40 anos. O Número do Aprendizado, calculado a partir do dia do nascimento, indica as lições de vida que você está aqui para aprender e como isso pode contribuir para o seu crescimento.\n\nA Numerologia nos oferece uma rica tapeçaria de números, cada um com seu próprio significado e influência em nossa vida. A seguir, vamos explorar o que é um Mapa Numerológico.',
          20, 'normal', [0, 0, 0], 10, 20, lineHeightFactor);

        const normalTextY26 = endYCt + 5;

        addTextWithPageCheck('O que é um Mapa Numerológico?', 22, 'normal', [128, 0, 128], 10, normalTextY26,
          lineHeightFactor);
        const endYCt2 = addTextWithPageCheck(
          '\nUm Mapa Numerológico é semelhante a um mapa do tesouro, mas em vez de procurar por ouro, ele nos ajuda a descobrir tesouros ainda mais valiosos: o conhecimento sobre nós mesmos e nosso potencial.\n\nO Mapa Numerológico é um retrato detalhado de uma pessoa, desenhado não com pincel e tinta, mas com números. Ele é criado usando a data de nascimento e o nome completo, calculando uma série de números - como o Número do Caminho da Vida, Número de Expressão, Número da Alma, Número de Personalidade, Número do Aprendizado, Número do Poder, entre outros.\n\nO propósito de um Mapa Numerológico é nos ajudar a entender melhor quem somos e qual é o nosso caminho na vida. Assim como um mapa de estradas nos mostra a melhor rota para chegar a um destino, o Mapa Numerológico nos mostra o caminho para alcançar nosso potencial máximo.\n\nEle pode revelar nossos pontos fortes e fracos, nossos desejos mais profundos, nossas melhores oportunidades e os desafios que temos pela frente. Ele nos dá uma ideia de como somos percebidos pelos outros e até nos oferece dicas sobre como podemos melhorar nossos relacionamentos.',
          20, 'normal', [0, 0, 0], 10, normalTextY26, lineHeightFactor);

        const normalTextY27 = endYCt2 + 5;

        addTextWithPageCheck('Como Ler e Interpretar o Mapa Numerológico', 22, 'normal', [128, 0, 128], 10,
          normalTextY27, lineHeightFactor);
        const endYCt3 = addTextWithPageCheck(
          '\nEntender o seu Mapa Numerológico é como descobrir um novo manual para a sua vida. Cada número traz uma visão diferente sobre quem você é e o que você pode alcançar.\n\nComeçamos com o Número do Destino. Se este número for 1, indica uma forte tendência para liderança e independência. Sabendo disso, você pode começar a confiar mais em suas decisões e talvez assumir um papel de liderança no trabalho ou na comunidade.\n\nO Número de Expressão reflete seus talentos e capacidades. Se o seu número for 2, sugere que você é bom em trabalhar em equipe e possui grande empatia. Você pode se destacar em profissões que envolvam cuidar de pessoas ou resolver conflitos, como enfermagem ou mediação.\n\nSeu Número da Alma revela seus desejos mais profundos. Se o seu número for 5, você tem um forte desejo por liberdade e aventura. Sabendo disso, você pode planejar mais viagens e aventuras em sua vida ou buscar um trabalho que ofereça maior flexibilidade.\n\nO Número da Personalidade mostra como os outros te veem. Um número 9 indica que as pessoas veem você como alguém generoso e altruísta. Sabendo disso, você pode usar essas qualidades para criar relações mais fortes e significativas.\n\nO Número do Aprendizado pode indicar um talento especial. Se o seu número for 6, isso sugere um dom especial para ensinar ou aconselhar. Considerar dar aulas particulares ou se tornar uma conselheira pode ser uma boa ideia.\n\nO Número da Maturidade aponta para o seu potencial ao atingir a maturidade. Um número 8, por exemplo, indica um potencial para prosperidade financeira e poder. Sabendo disso, você pode tomar decisões financeiras com mais confiança e buscar posições de liderança.n\nOs Números de Desafio mostram os obstáculos que você pode enfrentar em diferentes áreas da vida. Se um dos seus números de desafio for 7, pode ser que você enfrente desafios relacionados à espiritualidade ou à busca por conhecimento. Nesse caso, aulas, cursos ou livros sobre espiritualidade podem ser úteis.',
          20, 'normal', [0, 0, 0], 10, normalTextY27, lineHeightFactor);

        const normalTextY28 = endYCt3 + 5;

        addTextWithPageCheck('O que é o Número da Alma?', 22, 'normal', [128, 0, 128], 10, normalTextY28,
          lineHeightFactor);
        const endYCt4 = addTextWithPageCheck(
          '\nO Número da Alma, também conhecido como o número do desejo do coração, reflete seus desejos internos, aquilo que você deseja ser, ter ou fazer na vida. É um número muito importante porque revela sua motivação interna, o que realmente te faz levantar da cama todos os dias.\nSabendo o seu Número da Alma, você pode direcionar melhor suas ações para atingir o que deseja. Por exemplo, se o seu Número da Alma indicar um forte desejo de ajudar os outros, você pode buscar oportunidades de voluntariado, trabalhar em ONGs ou escolher uma profissão que permita esse cuidado com o próximo, como medicina ou assistência social.',
          20, 'normal', [0, 0, 0], 10, normalTextY28, lineHeightFactor);

        const normalTextY29 = endYCt4 + 5;

        addTextWithPageCheck('O que é o Número de Expressão?', 22, 'normal', [128, 0, 128], 10, normalTextY29,
          lineHeightFactor);
        const endYCt5 = addTextWithPageCheck(
          '\nO Número de Expressão é como um mapa para uma mina de ouro escondida dentro de você. Ele revela suas habilidades naturais e talentos inatos, muitos dos quais você pode ainda não estar plenamente consciente.\n\nDe maneira mais técnica, o Número de Expressão é derivado das letras do seu nome completo, conforme registrado no nascimento. Ele traz à tona as habilidades, competências e talentos que você possui nesta vida.\n\nConhecendo o seu Número de Expressão, você pode compreender melhor seus talentos e como usá-los para alcançar seus objetivos. Por exemplo, se o seu Número de Expressão indicar um talento natural para a comunicação, você pode se destacar em carreiras como jornalismo, publicidade ou ensino.\n\nSe descobrir que tem uma grande habilidade para lidar com detalhes, pode prosperar em campos como contabilidade ou administração de empresas. Conhecer o seu Número de Expressão pode lhe dar uma vantagem significativa na vida.',
          20, 'normal', [0, 0, 0], 10, normalTextY29, lineHeightFactor);

        const normalTextY30 = endYCt5 + 5;

        addTextWithPageCheck('O que é o Número do Destino?', 22, 'normal', [128, 0, 128], 10, normalTextY30,
          lineHeightFactor);
        const endYCt6 = addTextWithPageCheck(
          '\nO Número do Destino é como a estrada principal que atravessa toda a sua vida. Ele é a maior rodovia que você vai percorrer na sua jornada, mostrando a direção principal que sua vida tomará.\n\nVamos imaginar uma pessoa muito prestativa e amorosa, sempre disponível para ajudar os outros. Faz sentido que o Número do Destino dela seja 6, um número associado ao amor, à família e à responsabilidade. Sabendo disso, ela entende melhor porque sempre sentiu uma forte necessidade de cuidar das pessoas ao seu redor, o que lhe dá uma visão mais clara do seu propósito e a ajuda a se sentir mais realizada.\n\nPor outro lado, imagine uma pessoa muito independente e que adora aventuras. Se o Número do Destino dela é 5, que está relacionado à liberdade e a mudanças, ela entende melhor porque se sente mais feliz quando está em movimento e vivendo novas experiências.\n\nPortanto, o Número do Destino não define totalmente quem você é, mas pode lhe dar uma ideia das lições importantes que você veio aprender aqui e dos desafios que pode enfrentar. Pense nele como uma bússola que ajuda a entender o caminho que você veio percorrer.',
          20, 'normal', [0, 0, 0], 10, normalTextY30, lineHeightFactor);

        const normalTextY31 = endYCt6 + 5;

        addTextWithPageCheck('O que é o Número da Personalidade?', 22, 'normal', [128, 0, 128], 10, normalTextY31,
          lineHeightFactor);
        const endYCt7 = addTextWithPageCheck(
          '\nPense no Número da Personalidade como a fachada que você apresenta ao mundo. Quando você conhece alguém pela primeira vez, essa pessoa forma uma primeira impressão com base no que vê e sente. Essa impressão é o que chamamos de Número da Personalidade na numerologia.\n\nO Número da Personalidade indica como você é percebido pelas pessoas ao seu redor, especialmente por aquelas que não te conhecem bem. É como um cartão de visitas que mostra algumas características suas antes mesmo de qualquer conversa.\n\nEntender o seu Número da Personalidade pode ajudar a entender por que as pessoas reagem a você de determinadas maneiras. Por exemplo, se seu Número da Personalidade indica uma aparência séria e reservada, você pode entender por que algumas pessoas podem achá-lo um pouco distante no primeiro encontro. Sabendo disso, você pode tomar a iniciativa de mostrar mais do seu lado acolhedor e amigável, quebrando essa primeira impressão.',
          20, 'normal', [0, 0, 0], 10, normalTextY31, lineHeightFactor);

        const normalTextY32 = endYCt7 + 5;

        addTextWithPageCheck('O que é o Número do Subconsciente?', 22, 'normal', [128, 0, 128], 10, normalTextY32,
          lineHeightFactor);
        addTextWithPageCheck(
          '\nO Número do Subconsciente reflete a sua capacidade de lidar com desafios e a sua reação instintiva a situações de pressão. Ele é derivado das letras que aparecem repetidamente no seu nome completo. Este número revela os recursos internos que você tem à disposição quando enfrenta dificuldades.\n\nQuando você conhece o seu Número do Subconsciente, pode compreender melhor suas reações automáticas e padrões de comportamento inconscientes. Por exemplo, se o seu Número do Subconsciente indicar uma alta capacidade de resiliência, você pode se sentir mais confiante ao enfrentar desafios, sabendo que possui uma força interior para superar obstáculos.\n\nEntender o seu Número do Subconsciente é como descobrir uma reserva oculta de força e recursos dentro de você. Isso pode ser extremamente útil em momentos de estresse ou crise, proporcionando uma compreensão mais profunda de suas capacidades e limitando reações impulsivas.',
          20, 'normal', [0, 0, 0], 10, normalTextY32, lineHeightFactor);

        doc.addPage();

        addTextWithPageCheck('Números de Desafio', 22, 'normal', [128, 0, 128], 10, 20, lineHeightFactor);
        const endYCt9 = addTextWithPageCheck(
          '\nA vida é como uma escola, e os Números de Desafio são como os deveres de casa que precisamos fazer para aprender nossas lições e evoluir. Esses números, na numerologia, são como um mapa que nos mostra as lições que precisamos aprender ao longo da vida. Eles apontam para os obstáculos que podemos encontrar, que são exatamente o que precisamos para crescer e evoluir.\n\nConhecendo seus Números de Desafio, você pode usá-los para aprender e crescer. Eles dão pistas sobre os desafios que você pode enfrentar e como superá-los. Lembre-se de que os desafios são oportunidades de crescimento, e com a numerologia, você tem uma ferramenta poderosa para entender esses desafios e tirar o melhor proveito deles.',
          20, 'normal', [0, 0, 0], 10, 20, lineHeightFactor);

        const normalTextY34 = endYCt9 + 5;

        addTextWithPageCheck('Como os Números de Desafio Funcionam', 22, 'normal', [128, 0, 128], 10, normalTextY34,
          lineHeightFactor);
        const endYCt10 = addTextWithPageCheck(
          '\nOs Números de Desafio podem aparecer em diferentes fases da vida, cada um trazendo lições específicas para aquele período. As fases dos Números de Desafio são calculadas com base na data de nascimento e outras variáveis. Aqui estão as idades específicas:\n\nPrimeiro Desafio (0 a 30 anos): Geralmente aparece na infância e adolescência, influenciando o desenvolvimento inicial da personalidade e os primeiros testes de caráter.\n\nSegundo Desafio (30 a 40 anos): Acontece durante a juventude até a meia-idade, quando as responsabilidades começam a aumentar e as decisões de vida mais significativas são tomadas.\n\nTerceiro Desafio (40 a 55 anos): Aparece na meia-idade até a velhice, muitas vezes trazendo testes de adaptação e sabedoria adquirida ao longo dos anos.\n\nQuarto Desafio (55 anos em diante): Pode influenciar durante toda a vida, sendo um desafio constante que pode ser revisitado em várias ocasiões.',
          20, 'normal', [0, 0, 0], 10, normalTextY34, lineHeightFactor);

        const normalTextY35 = endYCt10 + 5;

        addTextWithPageCheck('Como Utilizar essa Informação', 22, 'normal', [128, 0, 128], 10, normalTextY35,
          lineHeightFactor);
        const endYCt11 = addTextWithPageCheck(
          '\nCompreendendo seus Números de Desafio, você está melhor preparado para enfrentar os obstáculos da vida. Use essa informação para se preparar e aprender as lições que a vida quer ensinar. Cada desafio é uma oportunidade para crescer e evoluir, tornando você mais forte e sábio ao longo do tempo.\n\nPegue seu mapa e prepare-se para a aventura da vida! Com seus Números de Desafio em mãos, você está mais preparado do que nunca para aprender e crescer.\n\nCom isso, estamos prontos para explorar o que cada número significa para você e como eles podem guiar sua jornada de autoconhecimento.',
          20, 'normal', [0, 0, 0], 10, normalTextY35, lineHeightFactor);


        // Verificar a distância até o final da página
        if (nextContentY + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do segundo título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY2 = endYCt11 + 10;
        const endY2 = addTextWithPageCheck(
          'A seleção dos seus números da sorte foi realizada por meio de uma análise detalhada do seu nome e data de nascimento, empregando os princípios da numerologia. Este processo identifica os números que mais ressoam com suas energias pessoais. \n\nCálculo do Número de Expressão \nO número de expressão, também conhecido como número de personalidade, é calculado a partir das letras do seu nome completo. Cada letra corresponde a um número específico (1-9), e esses números são somados até serem reduzidos a um único dígito. Este número revela sua personalidade natural, habilidades e os talentos que você traz ao mundo. \n\nCálculo do Número da Vida \nO número da vida, ou número de destino, é calculado a partir de sua data de nascimento. Todos os números de sua data de nascimento (dia, mês e ano) são somados continuamente até que se reduzam a um único dígito. Este número reflete o principal percurso de sua vida, destacando oportunidades, desafios e lições essenciais que você encontrará. \n\nCálculo do Número da Alma \nEste número é obtido somando apenas as vogais de seu nome. As vogais revelam seus desejos internos, sonhos e as motivações ocultas que movem sua vida. Como nos outros cálculos, as letras são convertidas em números que, somados, são reduzidos a um único dígito. \n\nCálculo do Número de Personalidade \nDiferente do número de expressão, o número de personalidade é calculado usando apenas as consoantes do seu nome. Este número reflete como você se apresenta e é percebido pelo mundo externo, indicando a impressão que você deixa nas outras pessoas.',
          20, 'normal', [0, 0, 0], 10, normalTextY2, lineHeightFactor);

        const nextContentY2 = endY2 + 10;

        // Verificar a distância até o final da página
        if (nextContentY2 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextY3 = nextContentY2 + 10;
        const endY3 = addTextWithPageCheck(
          'Cálculo do Número da Maturidade \nO número da maturidade é calculado somando o número da vida (número de destino) e o número de expressão (número de personalidade). Este número representa as forças que você começa a compreender e a integrar mais plenamente à medida que amadurece, geralmente por volta dos 35-40 anos de idade. Ele indica as energias que se tornam mais proeminentes e influentes durante a segunda metade da sua vida, guiando-o para o seu pleno potencial e realizações maiores. \n\n4. Personalização dos Números da Sorte \nOs números finais são personalizados para refletir sua energia única. Eles são projetados para alinhar-se com suas vibrações naturais e ajudar a atrair as oportunidades e sucessos que você busca. \n\nEstes números não apenas ressoam com suas energias pessoais, mas também harmonizam com as influências cósmicas que moldam seu destino. Incorporá-los em sua vida cotidiana pode trazer uma nova dimensão de sorte e prosperidade, orientando suas decisões e atraindo boas energias.',
          20, 'normal', [0, 0, 0], 10, normalTextY3, lineHeightFactor);

        let nextContentY3 = endY3 + 10;

        // Verificar a distância até o final da página
        if (nextContentY3 + 10 > pageHeight) {
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextYSouLTitle = nextContentY3 + 30;
        const endYnormalTextYSouLTitle = addTextWithPageCheck('\nO que seu Número da Alma diz sobre você?', 24,
          'normal', [128, 0, 128], 10, normalTextYSouLTitle, lineHeightFactor);

        let nextContentYSoulText = endYnormalTextYSouLTitle + 5;

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextYsoulText = nextContentYSoulText;
        const endY4 = addTextWithPageCheck('O seu Número da Alma é ' + this.soulNumber + '\n\n' + this.soulText, 20,
          'normal', [0, 0, 0], 10, normalTextYsoulText, lineHeightFactor);

        let nextContentYExpressaoTitle = endY4 + 10;

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYExpressaoTitle = nextContentYExpressaoTitle + 10;
        const endYExpressaoTitle = addTextWithPageCheck('O que seu Número de Expressão diz sobre você?', 24, 'normal',
          [128, 0, 128], 10, normalTextContentYExpressaoTitle, lineHeightFactor);

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYExpressao = endYExpressaoTitle + 10;
        const endYExpressao = addTextWithPageCheck('O seu Número de Expressão é ' + this.expressionNumber + '\n\n' +
          this.expressionText, 20, 'normal', [0, 0, 0], 10, normalTextContentYExpressao, lineHeightFactor);

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYLifePathTitle = endYExpressao + 10;
        const endYLifePathTitle = addTextWithPageCheck('O que seu Número do Caminho da Vida diz sobre você?', 23,
          'normal', [128, 0, 128], 10, normalTextContentYLifePathTitle, lineHeightFactor);

        // Texto normal abaixo do terceiro título
        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYLifePath = endYLifePathTitle + 10;
        const endYLifePath = addTextWithPageCheck('O seu Número do Caminho da Vida é ' + this.lifeNumber + '\n\n' +
          this.lifeText, 20, 'normal', [0, 0, 0], 10, normalTextContentYLifePath, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYPersonalityNumberTitle = endYLifePath + 10;
        const endYPersonalityNumberTitle = addTextWithPageCheck('O que seu Número da Personalidade diz sobre você?',
          24, 'normal', [128, 0, 128], 10, normalTextContentYPersonalityNumberTitle, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYPersonalityNumber = endYPersonalityNumberTitle + 10;
        const endYPersonalityNumber = addTextWithPageCheck('O seu Número da Personalidade é ' + this
          .personalityNumber + '\n\n' + this.personalityText, 20, 'normal', [0, 0, 0], 10,
          normalTextContentYPersonalityNumber, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYsubconsciousSelfNumberTitle = endYPersonalityNumber + 10;
        const endYsubconsciousSelfNumberTitle = addTextWithPageCheck(
          'O que seu Número do Subconsciente diz sobre você?', 24, 'normal', [128, 0, 128], 10,
          normalTextContentYsubconsciousSelfNumberTitle, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYsubconsciousSelfNumber = endYsubconsciousSelfNumberTitle + 10;
        const endYsubconsciousSelfNumber = addTextWithPageCheck('O seu Número do Subconsciente é ' + this
          .subconsciousSelfNumber + '\n\n' + this.subconsciousText, 20, 'normal', [0, 0, 0], 10,
          normalTextContentYsubconsciousSelfNumber, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersTitle = endYsubconsciousSelfNumber + 10;
        const endYChallengeNumbersTitle = addTextWithPageCheck('O que seus Número do Desafio dizem sobre você?', 24,
          'normal', [128, 0, 128], 10, normalTextContentYChallengeNumbersTitle, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbers = endYChallengeNumbersTitle + 10;
        const endYChallengeNumbers = addTextWithPageCheck('O seus Números do Desafio são: ' + this.challengeNumbers
          .first + ',' + this.challengeNumbers.second + ',' + this.challengeNumbers.third + ' e ' + this
          .challengeNumbers.main + '.', 20, 'normal', [0, 0, 0], 10, normalTextContentYChallengeNumbers,
          lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersTitle1 = endYChallengeNumbers + 10;
        const endYChallengeNumbersTitle1 = addTextWithPageCheck('Desafio da vida com número ' + this.challengeNumbers
          .first, 22, 'bold', [128, 0, 128], 10, normalTextContentYChallengeNumbersTitle1, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersDesc1 = endYChallengeNumbersTitle1 + 10;
        const endYChallengeNumbersDesc01 = addTextWithPageCheck(this.challengeNumbers.firstText, 20, 'normal', [0, 0,
          0
        ], 10, normalTextContentYChallengeNumbersDesc1, lineHeightFactor);

        let nextContentChallengeNumbersTitle02 = endYChallengeNumbersDesc01 + 10;

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersTitle02 = nextContentChallengeNumbersTitle02 + 10;
        const endYChallengeNumbersTitle02 = addTextWithPageCheck('Desafio da vida com número ' + this.challengeNumbers
          .second, 22, 'bold', [128, 0, 128], 10, normalTextContentYChallengeNumbersTitle02, lineHeightFactor);


        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersDesc02 = endYChallengeNumbersTitle02 + 10;
        const endYChallengeNumbersDesc02 = addTextWithPageCheck(this.challengeNumbers.secondText, 20, 'normal', [0, 0,
          0
        ], 10, normalTextContentYChallengeNumbersDesc02, lineHeightFactor);

        let nextContentChallengeNumbersTitle03 = endYChallengeNumbersDesc02 + 10;

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersTitle03 = nextContentChallengeNumbersTitle03 + 10;
        const endYChallengeNumbersTitle03 = addTextWithPageCheck('Desafio da vida com número ' + this.challengeNumbers
          .third, 22, 'bold', [128, 0, 128], 10, normalTextContentYChallengeNumbersTitle03, lineHeightFactor);


        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersDesc03 = endYChallengeNumbersTitle03 + 10;
        const endYChallengeNumbersDesc03 = addTextWithPageCheck(this.challengeNumbers.thirdText, 20, 'normal', [0, 0,
          0
        ], 10, normalTextContentYChallengeNumbersDesc03, lineHeightFactor);

        let nextContentChallengeNumbersTitle04 = endYChallengeNumbersDesc03 + 10;

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersTitle04 = nextContentChallengeNumbersTitle04 + 10;
        const endYChallengeNumbersTitle04 = addTextWithPageCheck('Desafio da vida com número ' + this.challengeNumbers
          .main, 22, 'bold', [128, 0, 128], 10, normalTextContentYChallengeNumbersTitle04, lineHeightFactor);

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal
        const normalTextContentYChallengeNumbersDesc04 = endYChallengeNumbersTitle04 + 10;
        const endYChallengeNumbersDesc04 = addTextWithPageCheck(this.challengeNumbers.mainText + '.', 20, 'normal', [
          0, 0, 0
        ], 10, normalTextContentYChallengeNumbersDesc04, lineHeightFactor);

        let nextContentY4 = endYChallengeNumbersDesc04 + 10;


        // Verificar a distância até o final da página
        if (nextContentY4 + 10 > pageHeight) {
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar rectY para continuar adicionando mais conteúdo
        }

        doc.setTextColor(0, 0, 0); // Cor do texto preto
        doc.setFontSize(13); // Tamanho da fonte menor para o texto normal
        doc.setFont('helvetica', 'normal'); // Fonte normal

        doc.addPage();

        addTextWithPageCheck('Reforço da Importância dos Números', 22, 'bold', [128, 0, 128], 10, 20,
          lineHeightFactor);

        const endY13 = addTextWithPageCheck(
          "\nOs números são mais do que simples dígitos; eles são símbolos poderosos que ressoam com as energias do universo e com sua essência pessoal. Incorporá-los em sua vida diária pode abrir portas para novas oportunidades, atrair prosperidade e trazer um sentido de harmonia e alinhamento com as forças cósmicas que influenciam seu destino. \n\nUtilizar seus números em decisões importantes e pequenas escolhas cotidianas é uma maneira prática de aumentar suas chances de sucesso e bem-estar. Seja agendando compromissos em datas favoráveis, escolhendo números de assentos ou mesas, ou até mesmo usando-os em suas senhas, cada pequena ação pode acumular energias positivas e direcioná-las para você. \n\nMensagem Final de Incentivo \nLembre-se, você tem nas mãos uma ferramenta poderosa para transformar sua vida de maneira significativa. Os números foram cuidadosamente selecionados para ressoar com suas energias astrológicas únicas. Ao utilizar este mapa, você está se alinhando com as forças do universo que trabalham a seu favor. \n\nAcredite no poder dos números e na capacidade que eles têm de influenciar sua vida positivamente. Permita que essa nova abordagem traga mais clareza, confiança e sucesso em suas escolhas diárias. Cada passo que você dá com a orientação dos seus números da sorte é um passo em direção a uma vida mais próspera e plena. \n\nEstamos juntos nessa jornada, e eu estou aqui para apoiá-la em cada etapa do caminho. Confie no processo, siga suas intuições e aproveite as maravilhas que seus números da sorte podem trazer. Um grande abraço, e que a sorte esteja sempre ao seu lado! \n\nMahila Luz",
          20, 'normal', [0, 0, 0], 10, 20, lineHeightFactor);

        let nextContentY13 = endY13 + 10;

        // Verificar a distância até o final da página
        if (nextContentY13 + 10 > pageHeight) {
          doc.addPage();
          rectY = 10; // Reinicia no topo da nova página
        } else {
          rectY += rectHeight + 10; // Incrementar nextContentY para continuar adicionando mais conteúdo
        }

        console.log(nextContentY13);

        return doc;
      },
      async convertPDFToBase64(pdfBytes) {
        return new Promise((resolve) => {
          const blob = new Blob([pdfBytes], {
            type: 'application/pdf'
          });
          const reader = new FileReader();
          reader.readAsDataURL(blob);
          reader.onloadend = () => {
            const base64data = reader.result.split(',')[1];
            resolve(base64data);
          };
        });
      },
      async loadImage(url) {
        return new Promise((resolve, reject) => {
          let img = new Image();
          img.onload = () => {
            let canvas = document.createElement("canvas");
            canvas.width = img.width;
            canvas.height = img.height;
            let ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, img.width, img.height);
            resolve(canvas.toDataURL("image/png", 0.7)); // Captura os dados da imagem como JPEG
          };
          img.onerror = reject;
          img.crossOrigin = "Anonymous";
          img.src = url;
        });
      },
      convertToPng() {
        const img = new Image();
        img.onload = () => {
          const canvas = document.createElement('canvas');
          const ctx = canvas.getContext('2d');
          canvas.width = img.width;
          canvas.height = img.height;
          ctx.drawImage(img, 0, 0);
          this.pngDataUrl = canvas.toDataURL('image/png', 0.7);
        };
        img.src = this.graficoSigno.data.base64_image;
      },
      downloadPDF(pdfBytes, filename) {
        // Criar um blob com os bytes do PDF
        const blob = new Blob([pdfBytes], {
          type: 'application/pdf'
        });

        // Criar uma URL temporária para o blob
        const url = window.URL.createObjectURL(blob);

        // Criar um elemento <a> temporário para download
        const link = document.createElement('a');
        link.href = url;
        link.download = filename;

        // Adicionar ao DOM, clicar e remover
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

        // Limpar a URL temporária
        window.URL.revokeObjectURL(url);

        console.log(`PDF ${filename} foi baixado com sucesso!`);
      },
      async downloadCartilha() {
        try {
          // Gerar o PDF
          const pdfDoc = await this.generateCartilha();
          const compressedPdfBytes = await this.compressPDF(pdfDoc);

          // Fazer o download
          const filename = `Leitura_Personalizada_${this.full_name.replace(/\s+/g, '_')}.pdf`;
          this.downloadPDF(compressedPdfBytes, filename);

        } catch (error) {
          console.error('Erro ao gerar e baixar o PDF:', error);
        }
      },

      getSoulIcon(soulNumber) {
        const icons = {
          1: '🔥',
          2: '💕', 
          3: '🎨',
          4: '🏗️',
          5: '🦅',
          6: '💖',
          7: '🔮',
          8: '👑',
          9: '🌍',
          11: '🔮',
          22: '🏗️',
          33: '🕊️'
        };
        return icons[soulNumber] || '✨';
      },

      getSoulTitle(soulNumber) {
        const titles = {
          1: 'NÚMERO DA ALMA 1: O PIONEIRO SUPREMO',
          2: 'NÚMERO DA ALMA 2: A ALMA ROMÂNTICA SUPREMA',
          3: 'NÚMERO DA ALMA 3: O ARTISTA DA VIDA SUPREMO',
          4: 'NÚMERO DA ALMA 4: O ARQUITETO DA ESTABILIDADE SUPREMO',
          5: 'NÚMERO DA ALMA 5: O ESPÍRITO LIVRE SUPREMO',
          6: 'NÚMERO DA ALMA 6: O CORAÇÃO CURADOR UNIVERSAL',
          7: 'NÚMERO DA ALMA 7: O MÍSTICO BUSCADOR SUPREMO',
          8: 'NÚMERO DA ALMA 8: O IMPERADOR DOS NEGÓCIOS SUPREMO',
          9: 'NÚMERO DA ALMA 9: O CURADOR UNIVERSAL SUPREMO',
          11: 'NÚMERO DA ALMA 11: O VISIONÁRIO ESPIRITUAL SUPREMO',
          22: 'NÚMERO DA ALMA 22: O ARQUITETO CÓSMICO SUPREMO',
          33: 'NÚMERO DA ALMA 33: O MESTRE CURADOR SUPREMO'
        };
        return titles[soulNumber] || 'NÚMERO DA ALMA: O ESPÍRITO ÚNICO';
      },

      getSoulSubtitle(soulNumber) {
        const subtitles = {
          1: 'A Alma que Lidera com Coragem e Pioneirismo Divino',
          2: 'O Coração Divino que Une, Harmoniza e Transcende Através do Amor Universal',
          3: 'A Alma Divina que Pinta o Mundo Inteiro com Alegria Transcendente e Criatividade Infinita',
          4: 'A Alma que Constrói Fundações Sólidas e Eternamente Duradouras',
          5: 'A Alma que Voa Sem Limites e Desperta Possibilidades Infinitas',
          6: 'A Alma que Ama Incondicionalmente e Cura o Mundo',
          7: 'A Alma que Desvenda os Mistérios Cósmicos Universais e Desperta a Sabedoria Eterna',
          8: 'A Alma que Constrói Impérios Duradouros e Comanda com Sabedoria Divina',
          9: 'A Alma que Abraça, Cura e Eleva Toda a Humanidade com Amor Transcendente',
          11: 'A Alma Iluminada que Caminha Conscientemente Entre Mundos e Dimensões Superiores',
          22: 'A Alma Mestre que Constrói Legados Eternos e Monumentos Transcendentais',
          33: 'A Alma Mestre que Cura, Eleva e Transforma a Humanidade com Amor Transcendental'
        };
        return subtitles[soulNumber] || 'Uma alma única com propósito especial';
      },

      getExpressionIcon(expressionNumber) {
        const icons = {
          1: '👑',
          2: '🕊️',
          3: '🎭',
          4: '🏗️',
          5: '🦅',
          6: '💖',
          7: '🔮',
          8: '💎',
          9: '🌍',
          11: '⭐',
          22: '🌟',
          33: '✨'
        };
        return icons[expressionNumber] || '💫';
      },

      getExpressionTitle(expressionNumber) {
        const titles = {
          1: 'EXPRESSÃO 1: O COMANDANTE SUPREMO',
          2: 'EXPRESSÃO 2: O DIPLOMATA SUPREMO',
          3: 'EXPRESSÃO 3: O ENTUSIASTA SUPREMO',
          4: 'EXPRESSÃO 4: O CONSTRUTOR SUPREMO',
          5: 'EXPRESSÃO 5: O AVENTUREIRO SUPREMO',
          6: 'EXPRESSÃO 6: O CURADOR SUPREMO',
          7: 'EXPRESSÃO 7: O SÁBIO SUPREMO',
          8: 'EXPRESSÃO 8: O MAGNATA SUPREMO',
          9: 'EXPRESSÃO 9: O HUMANITÁRIO SUPREMO',
          11: 'EXPRESSÃO 11: O VISIONÁRIO SUPREMO',
          22: 'EXPRESSÃO 22: O MESTRE CONSTRUTOR',
          33: 'EXPRESSÃO 33: O MESTRE CURADOR'
        };
        return titles[expressionNumber] || 'EXPRESSÃO: O TALENTO ÚNICO';
      },

      getExpressionSubtitle(expressionNumber) {
        const subtitles = {
          1: 'A Força que Lidera, Inspira e Transforma Visões em Realidade',
          2: 'A Força que Harmoniza, Conecta e Transforma Conflitos em Colaboração',
          3: 'A Força que Ilumina, Inspira e Transforma Vidas com Alegria Radiante',
          4: 'A Força que Constrói, Organiza e Transforma Sonhos em Estruturas Sólidas',
          5: 'A Força que Liberta, Explora e Transforma Limitações em Possibilidades',
          6: 'A Força que Cura, Protege e Transforma Dor em Amor Incondicional',
          7: 'A Força que Investiga, Compreende e Transforma Mistérios em Sabedoria',
          8: 'A Força que Comanda, Prospera e Transforma Ambições em Realizações',
          9: 'A Força que Abraça, Serve e Transforma Individualismo em Amor Universal',
          11: 'A Força que Ilumina, Inspira e Transforma Consciência Coletiva',
          22: 'A Força que Constrói Legados e Transforma Visões em Monumentos Eternos',
          33: 'A Força que Cura a Humanidade e Transforma Sofrimento em Amor Divino'
        };
        return subtitles[expressionNumber] || 'Uma expressão única com dom especial';
      },

    },
    computed: {
      progressPercentage() {
        // Calcula a porcentagem baseada na página atual e total de páginas
        const baseProgress = ((this.pagina - 1) / (this.totalPaginas - 1)) * 100;
        
        // Usa a propriedade reativa de scroll para evitar loops infinitos
        const scrollProgressContribution = this.scrollProgress * (100 / this.totalPaginas);
        console.log(Math.min(baseProgress + scrollProgressContribution, 100));
        return Math.min(baseProgress + scrollProgressContribution, 100);
      }
    }
  };
</script>
