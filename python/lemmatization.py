import sys
import json
import stanza, pymysql

stanza.download('sr')
nlp = stanza.Pipeline('sr', processors='tokenize,lemma', use_gpu=False)

conn = pymysql.connect(
    host='127.0.0.1',
    user='root',
    password='GibsonLP123',
    database='blog',
    charset='utf8mb4',
    cursorclass=pymysql.cursors.DictCursor)

def lemmatize_text(text):
    doc = nlp(text)
    return ' '.join([word.lemma for sent in doc.sentences for word in sent.words])

try:
    with conn.cursor() as cursor:
        cursor.execute("SELECT id, title FROM posts")
        posts = cursor.fetchall()

        for post in posts:
            post_id = post['id']
            title = post['title']
            lemma_title = lemmatize_text(title)

            update_query = "UPDATE posts SET lemma_title = %s WHERE id = %s"
            cursor.execute(update_query, (lemma_title, post_id))
        conn.commit()
finally:
    conn.close()