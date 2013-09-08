class Singleton
    def __init__(self, decorated):
        self._decorated = decorated

    def Instance(self)
        try:
            return self._instance
        except AttributeError:
            self._instance = self._decorated()
            
