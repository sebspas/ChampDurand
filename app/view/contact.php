
		<div class="contenu" style="height: 470px;">
			<form class="formulaire" method="post" action="app/formmail.php" target="popup" onsubmit="javascript:window.open('','popup','width=500,height=25');">
				<p>
					<input type="text" name="prenom" value="Prénom" style="width: 140px;color: grey;margin-top: 110px;margin-left: 50px;" onclick="if(this.value=='Prénom')this.value='';"/>
					<input type="text" name="nom" value="Nom" style="width: 140px;color: grey;margin-left: 10px;" onclick="if(this.value=='Nom')this.value='';"/><br /><br />
					<input type="text" name="objet" value="Objet" style="width: 300px;color: grey;margin-left: 50px;" onclick="if(this.value=='Objet')this.value='';"/><br/><br/>
					<input type="email" name="email" value="votre@mail.fr" style="width: 300px;color: grey;margin-left: 50px" onclick="if(this.value=='votre@mail.fr')this.value='';"/>
					<input type="tel" name="telephone" value="Telephone" style="width: 150px;color: grey;margin-left: 10px;" onclick="if(this.value=='Telephone')this.value='';" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"/><br/><br/>
					<textarea name="message" rows="3" cols="55" style="color: grey;margin-left: 200px" value="Informations Complémentaire" onFocus="if(this.value=='Informations Complémentaire')this.value=''" >Informations Complémentaire</textarea><br/><br/>
					<input id="submit_button" type="submit" value="Envoyer" style="margin: 0;margin-left: 300px;"/>
					<input id="erase_button" type="RESET" value="Effacer" style="margin:0;margin-left: 15px;"/>
					<!-- Portection Anti-spam -->
					<div style="display:none">
					<label for="no_email">N'entrez rien dans ce champ *</label>
					<input id="no_email" name="no_email" type="email" />
					</div>
					<!-- Fin Protection Anti-spam -->
				</p><br/>
			</form>
		</div>