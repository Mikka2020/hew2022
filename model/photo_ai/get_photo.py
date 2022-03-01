import os
import glob
from PIL import Image
import pykakasi

kakasi = pykakasi.kakasi()

conv = kakasi.convert(text)
WIDTH = 256
HEIGHT = 144

folder_dir = './documents/photo_ai/'
value_name = 'オオカマキリ'

def get_photo(folder_dir , value_name):
    conv = kakasi.convert(value_name)
    hepburn_name = conv[0]['hepburn']
    
    from icrawler.builtin import BingImageCrawler
    crawler = BingImageCrawler(storage={"root_dir": os.path.join(folder_dir , value_name)})
    crawler.crawl(keyword=value_name , max_num=200)

    dir_name = os.path.join(folder_dir , value_name)
    new_dir_name = os.path.join(folder_dir , 'resize/' , hepburn_name)
    if not os.path.exists(new_dir_name):
        os.makedirs(new_dir_name)
        files = os.listdir(dir_name)
    else:
        files = os.listdir(dir_name)

    for file in os.listdir(dir_name):
        base, ext = os.path.splitext(file)
        if ext == '.jpg':
            print(file)
            #画像の元データを開く
            img = Image.open(os.path.join(dir_name, file))
            #画像を2分の1に縮小
            img_resize = img.resize(size=(WIDTH, HEIGHT))
            #縮小した画像を別フォルダに保存
            img_resize.save(os.path.join(new_dir_name, file))

            
get_photo(folder_dir , value_name)