from enum import Enum
class ebook_format(Enum):
    pdf = 1
    epub = 2
    mobi = 3
    azw = 4
class audio_format(Enum):
    mp3 = 1
    wma = 2
    wav = 3
class Book:
    def __init__(self,t,a):
        self.__title = t
        self.__author = a
    def get_title(self):
        return self.__title
    def get_author(self):
        return self.__author
    def get_description(self):
        return "title = "+self.__title+", Author = "+self.__author
class audio:
    def __init__(self,t,a):
        self.__title = t
        self.__author = a
    def get_title(self):
        return self.__title
    def get_author(self):
        return self.__author
    def get_description(self):
        return "title = "+self.__title+", Author = "+self.__author
class Book(Book):
    def __init__(self,t,a,f):
        super().__init__(t,a)
        try:
            if ebook_format[f]:
                print("Correct Format")
                self.__format = ebook_format[f]
            else:
                print('no')
                raise Exception()
               
        except Exception:
            print("Please enter in Correct Format")

    def get_description(self):
        return super().get_description()+" format = "+str(self.__format)
class audio(audio):
    def __init__(self,t,a,f):
        super().__init__(t,a)
        try:
            if audio_format[f]:
                print("Correct Format")
                self.__format = audio_format[f]
            else:
                raise Exception()

        except Exception:
            print("Please enter in Correct format")
    def get_description(self):
        return super().get_description()+" format = "+str(self.__format)
print("Details of Book:")
t=input("Enter title:")
a=input("Enter author:")
f=input("Enter format:")
obj1 = Book(t,a,f)
print(obj1.get_description())
print("Details of Audio:")
t=input("Enter title:")
a=input("Enter author:")
f=input("Enput format:")
obj2 = audio(t,a,f)
print(obj2.get_description())