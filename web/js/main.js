var config = {
    type: Phaser.AUTO,
    width:850,
    height:600,
    fps: {
        target:60,
        forceSetTimeOut:true
    },
    physics:{
        default:'arcade',
        arcade:{
            debug: false,
            gravity:{y:0}
        }
    },
    scene:[dani1, laia3, villa2, inventario]
};

game = new Phaser.Game(config);
//inventario = new Phaser.Game(config);