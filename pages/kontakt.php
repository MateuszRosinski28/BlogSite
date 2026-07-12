<h2>Kontakt</h2>

<p>Masz pytania lub chciałbyś się ze mną skontaktować? Poniżej znajdziesz formularz kontaktowy.</p>

<form method="POST" action="php/send-email.php" style="max-width: 500px; margin-top: 30px;">
    <div style="margin-bottom: 20px;">
        <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Imię i nazwisko:</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 1em;">
    </div>

    <div style="margin-bottom: 20px;">
        <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 1em;">
    </div>

    <div style="margin-bottom: 20px;">
        <label for="phone" style="display: block; margin-bottom: 5px; font-weight: bold;">Telefon (opcjonalnie):</label>
        <input type="tel" id="phone" name="phone" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 1em;">
    </div>

    <div style="margin-bottom: 20px;">
        <label for="subject" style="display: block; margin-bottom: 5px; font-weight: bold;">Temat:</label>
        <input type="text" id="subject" name="subject" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 1em;">
    </div>

    <div style="margin-bottom: 20px;">
        <label for="message" style="display: block; margin-bottom: 5px; font-weight: bold;">Wiadomość:</label>
        <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 1em; font-family: Arial, sans-serif;"></textarea>
    </div>

    <button type="submit" style="background-color: #667eea; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 1em; font-weight: bold; transition: background-color 0.3s ease;">
        Wyślij wiadomość
    </button>
</form>

<div style="margin-top: 40px; padding: 20px; background-color: #f9f9f9; border-radius: 5px;">
    <h3>Inne sposoby kontaktu:</h3>
    <p><strong>Email:</strong> twoj.email@example.com</p>
    <p><strong>Telefon:</strong> +48 XXX XXX XXX</p>
    <p><strong>Adres:</strong> Twoje Miasto, Polska</p>
</div>
