module.exports = (function (e, c) {

    return e.loader = {

        loading: false,
        loader: null,

        init: function () {

            /**
             * Init Loader
             * @type {THREE.TextureLoader}
             */
            this.loader = new THREE.TextureLoader(e.manager);

            /**
             * Load Global Items
             */
            this.load(c.elements['global']);

        },

        /**
         * Loader texture
         * @param path
         * @returns {*}
         */
        l: function (path) {

            if (path instanceof Array) {

                var collection = [];

                path.forEach(function (item) {
                    collection.push(this.l(item));
                }, this);

                return collection;
            }

            return this.loader.load(path);
        },

        load: function (elements) {
            this.loading = true;
            elements.forEach(function (el) {
                e.elements[el.name]      = el.create(e);
                e.elements[el.name].name = el.name;

                /**
                 * Attach the Public Variables
                 */
                if (typeof el.share === 'function') {
                    e.elements[el.name].public = el.share(e);
                }

            });
            this.loading = false;
        },

        compositionLoader: function (name) {
            this.load(c.elements[name]);
        },

        /**
         * Remove Object from Scene and Dispose it
         */
        destruct: function () {
            for (var i = 0; i < arguments.length; i++) {
                e.scene.a.remove(arguments[i]);
                delete e.elements[arguments[i].name];
                this.dispose(arguments[i]);
            }
        },

        /**
         * Dispose the object from memory
         */
        dispose: function (object) {
            object.geometry.dispose();
            object.material.dispose();
        }

    };

})(Engine, Configs);