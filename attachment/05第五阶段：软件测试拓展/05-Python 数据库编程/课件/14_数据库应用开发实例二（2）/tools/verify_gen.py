from PIL import Image
from PIL import ImageDraw
from PIL import ImageFont
import io
import random

def get_text():
    text = []
    for i in range(2):
        text.append(chr(random.randint(65,90)))
        text.append(chr(random.randint(97,122)))
    random.shuffle(text)
    return ''.join(text)

def get_color():
    r = random.randint(0,255)
    g = random.randint(0,255)
    b = random.randint(0,255)
    return "rgb(%d,%d,%d)" % (r,g,b)

def make_noises(drw,lines=3):
    for i in range(3):
        drw.line((random.randint(5,10),random.randint(5,45),
            random.randint(60,75),random.randint(5,45)), fill='green', width=2)
    pnt = []
    for i in range(300):
        pnt.append((random.randint(5,75),random.randint(5,45)))
    drw.point(pnt,fill=get_color())

def get_verify():
    a = Image.new('RGB',(80,50),'white')
    drw = ImageDraw.Draw(a)
    myfont = ImageFont.truetype('tt0143m_.ttf',size=20)
    atext = get_text()
    drw.text((10,10),atext,font=myfont,fill='green')
    make_noises(drw)
    f = io.BytesIO()
    a.save(f,'JPEG')
    f.seek(0)
    return f.read(),atext