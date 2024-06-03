document.addEventListener('DOMContentLoaded', function () {
  // 获取表头
  const headRow = [...document.querySelectorAll('#example thead th')].map(column => column.textContent.trim());

  // 获取表格数据
  const rows = [...document.querySelectorAll('#example tbody tr')].map(tr => {
    const cells = [...tr.querySelectorAll('td')].map(td => td.textContent.trim());
    const detailsButton = tr.querySelector('button[data-bs-target]');
    if (detailsButton) {
      const orderId = detailsButton.getAttribute('data-bs-target').replace('#details', '');
      const detailsModal = document.querySelector(`#details${orderId}`);
      const details = [...detailsModal.querySelectorAll('ul li')].map(li => li.textContent.trim()).join('; ');
      const accountToSendMoneyTo = detailsModal.querySelector('p:nth-of-type(1)').textContent.trim();
      const buyerRemarks = detailsModal.querySelector('p:nth-of-type(2)').textContent.trim();
      const orderStatus = detailsModal.querySelector('p:nth-of-type(3)').textContent.trim();
      cells.push(details, accountToSendMoneyTo, buyerRemarks, orderStatus);
    }
    return cells;
  });

  // 添加表头的额外列
  headRow.push('訂單明細', '買家選擇之匯款帳戶', '買家備註內容', '訂單狀態說明');

  // 生成 CSV 内容
  const content = [headRow, ...rows]
    .map(row => row.map(str => '"' + (str ? str.replace(/"/g, '""') : '') + '"'))
    .map(row => row.join(','))
    .join('\n');

  const BOM = '\uFEFF'; // utf-8 byte-order-mark
  const csvBlob = new Blob([BOM + content], { type: 'text/csv;charset=utf-8' });

  function showCsv() {
    console.log(content);
  }

  function download() {
    if (window.navigator.msSaveOrOpenBlob) { 
      // IE hack; see http://msdn.microsoft.com/en-us/library/ie/hh779016.aspx
      navigator.msSaveBlob(csvBlob, 'exampleTable.csv');
    } else {
      const objectUrl = URL.createObjectURL(csvBlob);
      const a = document.createElement('a');
      a.setAttribute('href', objectUrl);
      a.setAttribute('download', 'exampleTable.csv');

      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a); 
    }
  }

  // 将函数暴露到全局作用域以便按钮调用
  window.showCsv = showCsv;
  window.download = download;
});
