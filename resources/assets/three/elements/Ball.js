module.exports = (function () {

    return {
        name: 'Ball',
        object:function () {
            var geometry = new THREE.BoxGeometry(1, 1, 1);
            var material = new THREE.MeshBasicMaterial({ color:0x00ff00 });
            return new THREE.Mesh(geometry, material);
        }
    }

})();