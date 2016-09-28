<div class="caldera-config-group">
    <label><?php _e('Placeholder', 'caldera-forms'); ?></label>
    <div class="caldera-config-field">
        <input type="text" id="{{_id}}_placeholder" class="block-input field-config" name="{{_name}}[placeholder]" value="{{placeholder}}">
    </div>
</div>
<div class="caldera-config-group">
    <label><?php _e('Instructions', 'caldera-forms'); ?></label>
    <div class="caldera-config-field">
        <p>
            Mettre dans la colonne <strong>Valeur</strong> le nom du champ dans LDAP/AD et mettre dans le <strong>Titre</strong> le nom (slug) du champ dans Caldera Forms.
        </p>
        <p>Voici la liste des champs de LDAP/AD :</p>
        <ul>
            <li>uid = CIP</li>
            <li>mail = Courriel</li>
            <li>sn = Nom</li>
            <li>givenname = Prénom,</li>
            <li>displayname = Prénom + Nom</li>
            <li>telephonenumber = No. de téléphone</li>
            <li>memberof = Groupes</li>
            <li>department = Département / Faculté</li>
        </ul>
    </div>
</div>