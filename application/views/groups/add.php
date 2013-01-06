<h2>Uue grupi lisamine</h2>
<p class="help-block">Selle vormi
    abil saad lisada meie andmebaasi uue õppegrupi.</p>

<form action="<?=URL::base()?>groups/add"
      method="post">

    <label for="txt-name">Grupi nimi</label>
    <input type="text"
           id="txt-name"
           placeholder="Grupi nimi"
           name="group[name]"
            />

    <input type="submit" class="btn btn-primary"
           name="add" value="Lisa uus grupp"/>
</form>