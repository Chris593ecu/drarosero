// Función reciclable para whatsapp
function abrirWhatsApp(customMessage = '') {
    // Configuración global de WhatsApp
    const phone = '593969748118'; // Sustituye por el número real de WhatsApp (formato internacional sin +)
    const defaultMessage =
        'Hola, ví su página web y tengo una pregunta ¿me podrían ayudar?';

    // Seleccionar el mensaje personalizado o el predeterminado
    const text = customMessage ? customMessage : defaultMessage;

    // Construir la URL codificada correctamente
    const whatsappUrl = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;

    // Abrir en una pestaña nueva
    window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
}
