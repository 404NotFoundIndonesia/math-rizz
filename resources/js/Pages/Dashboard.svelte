<script>
    let name = 'Iqbal';

    const changeName = () => {
        name = name == 'Iqbal' ? 'Effendi' : 'Iqbal';
    }
</script>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima voluptatum voluptates at asperiores minus vel quisquam ipsam, deleniti, et eum sunt accusantium sapiente voluptate eaque eveniet sed rem fugit fugiat!</p>
<h1>{name}</h1>

<button on:click={changeName}>Ganti</button>
