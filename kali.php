<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Cybersécurité - Débutant</title>
    <style>
        /* === STYLE GÉNÉRAL === */
        body {
            background: radial-gradient(circle, #002200, black);
            color: #00ff00;
            font-family: 'Courier New', monospace;
            text-align: center;
            padding: 20px;
        }

        /* === CONTENEUR DU QUIZ === */
        .container {
            max-width: 700px;
            margin: auto;
            border: 2px solid #00ff00;
            padding: 20px;
            box-shadow: 0 0 15px #00ff00;
            background: rgba(0, 0, 0, 0.9);
            border-radius: 10px;
        }

        h1 {
            font-size: 28px;
            text-transform: uppercase;
            text-shadow: 0 0 10px #00ff00;
        }

        /* === STYLE DES QUESTIONS === */
        .question {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .options label {
            display: block;
            margin: 8px;
            padding: 10px;
            background: rgba(0, 255, 0, 0.2);
            border: 1px solid #00ff00;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .options label:hover {
            background: #00ff00;
            color: black;
            box-shadow: 0 0 10px #00ff00;
        }

        /* === BOUTON VALIDER === */
        button {
            margin-top: 20px;
            background: black;
            color: #00ff00;
            border: 2px solid #00ff00;
            font-size: 18px;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            font-weight: bold;
        }

        button:hover {
            background: #00ff00;
            color: black;
            box-shadow: 0 0 15px #00ff00;
        }

        /* === MESSAGE DE RÉSULTAT === */
        #result {
            margin-top: 20px;
            font-size: 22px;
            font-weight: bold;
            text-shadow: 0 0 10px #00ff00;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🔒 Quiz de Cybersécurité 🔓</h1>
        <p>Testez vos connaissances en cybersécurité !</p>

        <<form id="quizForm">
            <div class="question">
                <p>1. Quel est le mot de passe le plus sécurisé ?</p>
                <div class="options">
                    <label><input type="radio" name="q1" value="a"> 123456</label>
                    <label><input type="radio" name="q1" value="b"> Password</label>
                    <label><input type="radio" name="q1" value="c"> h@ckM3!92#</label>
                </div>
            </div>

            <div class="question">
                <p>2. Que signifie le sigle "VPN" ?</p>
                <div class="options">
                    <label><input type="radio" name="q2" value="a"> Virtual Private Network</label>
                    <label><input type="radio" name="q2" value="b"> Virus Protection Name</label>
                    <label><input type="radio" name="q2" value="c"> Very Personal Notebook</label>
                </div>
            </div>

            <div class="question">
                <p>3. Quel est le moyen le plus courant pour un hacker d'obtenir vos mots de passe ?</p>
                <div class="options">
                    <label><input type="radio" name="q3" value="a"> Brute force</label>
                    <label><input type="radio" name="q3" value="b"> Phishing</label>
                    <label><input type="radio" name="q3" value="c"> Antivirus</label>
                </div>
            </div>

            <div class="question">
                <p>4. Quelle extension de fichier est souvent utilisée pour les virus ?</p>
                <div class="options">
                    <label><input type="radio" name="q4" value="a"> .txt</label>
                    <label><input type="radio" name="q4" value="b"> .exe</label>
                    <label><input type="radio" name="q4" value="c"> .mp3</label>
                </div>
            </div>

            <div class="question">
                <p>5. Qu'est-ce qu'un "pare-feu" (firewall) ?</p>
                <div class="options">
                    <label><input type="radio" name="q5" value="a"> Un mur contre les virus</label>
                    <label><input type="radio" name="q5" value="b"> Un logiciel qui bloque les connexions non autorisées</label>
                    <label><input type="radio" name="q5" value="c"> Un antivirus</label>
                </div>
            </div>

            <div class="question">
                <p>6. Que doit-on faire en cas de mail suspect ?</p>
                <div class="options">
                    <label><input type="radio" name="q6" value="a"> L'ouvrir immédiatement</label>
                    <label><input type="radio" name="q6" value="b"> Ne pas cliquer sur les liens et le signaler</label>
                    <label><input type="radio" name="q6" value="c"> Le transférer à tous ses contacts</label>
                </div>
            </div>

            <div class="question">
                <p>7. Un "ransomware" fait quoi ?</p>
                <div class="options">
                    <label><input type="radio" name="q7" value="a"> Vole vos informations bancaires</label>
                    <label><input type="radio" name="q7" value="b"> Crypte vos fichiers et demande une rançon</label>
                    <label><input type="radio" name="q7" value="c"> Accélère votre connexion Internet</label>
                </d

            <div class="question">
                <p>8. Qu'est-ce que l'ingénierie sociale en cybersécurité ?</p>
                <div class="options">
                    <label><input type="radio" name="q8" value="a"> Une technique de manipulation pour obtenir des informations</label>
                    <label><input type="radio" name="q8" value="b"> Un logiciel antivirus</label>
                    <label><input type="radio" name="q8" value="c"> Une attaque brute force</label>
                </div>
            </div>

            <div class="question">
                <p>9. Quel est le risque principal d’un Wi-Fi public non sécurisé ?</p>
                <div class="options">
                    <label><input type="radio" name="q9" value="a"> Ralentissement de la connexion</label>
                    <label><input type="radio" name="q9" value="b"> Interception des données personnelles</label>
                    <label><input type="radio" name="q9" value="c"> Consommation excessive de batterie</label>
                </div>
            </div>

            <div class="question">
                <p>10. Quelle est la meilleure méthode pour sécuriser un compte en ligne ?</p>
                <div class="options">
                    <label><input type="radio" name="q10" value="a"> Utiliser un mot de passe unique et un gestionnaire de mots de passe</label>
                    <label><input type="radio" name="q10" value="b"> Partager son mot de passe avec des amis de confiance</label>
                    <label><input type="radio" name="q10" value="c"> Utiliser le même mot de passe pour tout</label>
                </div>
            </div>

            <button type="button" onclick="checkAnswers()">Voir mon score</button>
        </form>

        <p id="result"></p>
    </div>

    <script>
        /* === SCRIPT QUIZ === */
        function checkAnswers() {
            const answers = {
                q1: "c",
                q2: "a",
                q3: "b",
                q4: "b",
                q5: "b",
                q6: "b",
                q7: "b",
                q8: "a",
                q9: "b",
                q10: "a",
            };

            let score = 0;
            let totalQuestions = Object.keys(answers).length;

            for (let key in answers) {
                const selected = document.querySelector(`input[name="${key}"]:checked`);
                if (selected && selected.value === answers[key]) {
                    score++;
                }
            }

            let resultText = `Vous avez obtenu ${score} / ${totalQuestions} !<br>`;

            if (score === totalQuestions) {
                resultText += "🚀 Bravo, vous êtes un pro de la cybersécurité !";
            } else if (score >= 5) {
                resultText += "👍 Pas mal ! Vous avez des bases.";
            } else {
                resultText += "😅 Oops... Un peu de formation en cybersécurité à l'IUT de Kourou ne ferait pas de mal.";
            }

            document.getElementById("result").innerHTML = resultText;
        }
    </script>

</body>
</html>
